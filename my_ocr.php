<?php
/**
 * Created by
 * Habibur Rahman
 * Sr. Software Engineer
 * Date: 3/21/2018
 * Time: 2:23 PM
 */
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
    }
}

