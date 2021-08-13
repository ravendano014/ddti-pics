<?php
    require("connect.php");
    $result=connect();
    $response=array();
    $img_path='./photos/' . $_FILES['photo']['name'];
    //move_uploaded_file($_FILES['photo']['tmp_name'], './photos/' . $_FILES['photo']['name'])
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$img_path )){
        $sql="INSERT INTO imagenes(imgruta) VALUES (:imgpath)";
        $img_pathComplete='http://192.168.1.16/ddti-pics/backend/photos/'.$_FILES['photo']['name'];
        $query=$result->prepare($sql);
        $res=$query->execute([
            "imgpath" => $img_pathComplete,
    
        ]);
        if($res){
            $response["status"]=1;
        }
        
    };
    echo $response;
    echo json_encode($response);
?>