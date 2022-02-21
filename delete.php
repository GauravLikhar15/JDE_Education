<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $f = $_FILES['file'];
        $fle_name = $_FILES['file']['name'];
        $fle_tmp = $_FILES['file']['tmp_name'];
        // $file_store = "https://turbulent.000webhostapp.com//File_Uploaded//".$fle_name;
        // $file_store = "C://xampp/htdocs/19/File_Uploaded/".$fle_name;
        move_uploaded_file($f['tmp_name'],"https://turbulent.000webhostapp.com/File_Uploaded/".$f['name']);
        move_uploaded_file($f['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/File_Uploaded/".$f['name']);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/19/delete.php" method="POST" enctype="multipart/form-data">
        <label for="">Uploading File</label>
        <p><input type="file" name="file" class="target"></p>
        <p><input type="submit" name="upload" id="target" value="Upload"></p>
    </form>
</body>
</html>