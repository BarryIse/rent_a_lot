<?php
    function uploadImage($query, $folder){
        global $conn, $fileName, $imageErr;
        if(!empty($_FILES['image']['name'])){
            $allowedExt = ['png', 'jpg', 'jpeg'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileTmp = $_FILES['image']['tmp_name'];
            $targetDir = "$folder/$fileName";
            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));
            if(in_array($fileExt, $allowedExt)){
                if($fileSize < 1000000){
                    move_uploaded_file($fileTmp, $targetDir);
                    $sql = $conn->query("$query");
                }else{
                    $imageErr = 'File is too large';
                }
            }else{
                $imageErr = 'Invalid file type';
            }
        }
    }
?>