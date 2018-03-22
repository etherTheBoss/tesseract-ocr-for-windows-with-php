<?php
/**
 * Created by
 * Habibur Rahman
 * Sr. Software Engineer
 * Date: 3/21/2018
 * Time: 2:19 PM
 */
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ocr</title>
</head>
<body>
    <form action="my_ocr.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>