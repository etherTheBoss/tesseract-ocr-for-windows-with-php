# tesseract-ocr-for-windows-with-php

Installation 

Requirement :
 PHP 5.6 version or above
Composer installed
setp -1:   
download tesseract from  https://digi.bib.uni-mannheim.de/tesseract/tesseract-ocr-setup-3.05.01.exe install the downloaded exe file in your local machine. It should install in your  
C:\Program Files(x86)\Tesseract-OCR
directory (or your chosen directory) so check your environment variable that the path directory is given as it is or if it is not then make it like:
;C:\Program Files (x86)\Tesseract-OCR 

setp-2: 
create a directory or folder in your local server or server then open your command line (cmd)  in the directory 
composer require thiagoalessio/tesseract_ocr
copy then past and hit enter
note: you must have to have composer installed.
after downloading vendor and required files in the directory and then
@"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"
copy then past and hit enter
after finishing the chocolatery installation then 
choco install capture2text
again copy then past and hit enter

setp-3:
you can download my index.php and my_ocr.php
or
create a html or php file in the directory and your code should be... 
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

and then create another php file for uploading the image and processing for scaning it  and your code should be ..
require_once __DIR__.'/vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

$name=$_FILES['fileToUpload']['name'];


$tempName = $_FILES['fileToUpload']['tmp_name'];
$type = $_FILES['fileToUpload']['type'];
$size = $_FILES['fileToUpload']['size'];
$fileExtension = strtolower(substr($name, strpos($name, '.')+1));
$max = 200000;


if(isset($tempName ))
{
    if (!empty($tempName))
    {
        //Basic usage
        echo (new TesseractOCR($tempName))
            ->run();

        //Other language
//
//        echo (new TesseractOCR($tempName))
//            ->lang('deu')
//            ->run();

        //Multiple languages
//        echo (new TesseractOCR($tempName))
//            ->lang('eng', 'jpn', 'spa')
//            ->run();


        //Inducing recognition
//        echo (new TesseractOCR($tempName))
//            ->whitelist(range('A', 'Z'))
//            ->run();

        //Executable
//        echo (new TesseractOCR($tempName))
//            ->executable('C:\Program Files (x86)\Tesseract-OCR\tesseract.exe')
//            ->run();

        //Using tessdataDir
//        echo (new TesseractOCR($tempName))
//            ->tessdataDir('C:\Program Files (x86)\Tesseract-OCR\tessdata')
//            ->run();

then run it and enjoy your tesseract ocr
