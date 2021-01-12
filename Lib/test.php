<?php

namespace Lib;

require_once('Metadata.php');

// Files
$img = 'Files/img1.png';
$file = 'Files/file1.pdf';

$lib = new Metadata($file);

// Extract Meta
echo '<h1>Pdf File</h1>';
$metaFile = $lib->getMeta($file);
var_dump($metaFile);

$metaType = $lib->getMetadataType($metaFile);
var_dump($metaType);






// echo '<h1>Png Image</h1>';
// $metaImg = $lib->getMeta($img);
// var_dump($metaImg);
//
//
//
// // Save Meta on json file
// $lib->saveMetaJsonFile("Out","testFile", $metaFile);
// $lib->saveMetaJsonFile("Out","testImage", $metaImg);


// Gère les erreurs
// $lib->getErr1();
// $lib->getErr2();
// $lib->getErr3();





      //
      // 'SourceFile' => string 'Files/file1.pdf' (length=15)
      // 'ExifToolVersion' => float 10.4
      // 'FileName' => string 'file1.pdf' (length=9)
      // 'Directory' => string 'Files' (length=5)
      // 'FileSize' => string '310 kB' (length=6)
      // 'FileModifyDate' => string '2021:01:11 16:56:24+01:00' (length=25)
      // 'FileAccessDate' => string '2021:01:11 17:04:47+01:00' (length=25)
      // 'FileInodeChangeDate' => string '2021:01:11 16:56:24+01:00' (length=25)
      // 'FilePermissions' => string 'rw-r--r--' (length=9)
      // 'FileType' => string 'PDF' (length=3)
      // 'FileTypeExtension' => string 'pdf' (length=3)
      //
      //
      //
      // 'SourceFile' => string 'Files/img1.png' (length=14)
      // 'ExifToolVersion' => float 10.4
      // 'FileName' => string 'img1.png' (length=8)
      // 'Directory' => string 'Files' (length=5)
      // 'FileSize' => string '96 kB' (length=5)
      // 'FileModifyDate' => string '2021:01:11 16:56:22+01:00' (length=25)
      // 'FileAccessDate' => string '2021:01:11 16:55:22+01:00' (length=25)
      // 'FileInodeChangeDate' => string '2021:01:11 16:56:22+01:00' (length=25)
      // 'FilePermissions' => string 'rw-r--r--' (length=9)
      // 'FileType' => string 'PNG' (length=3)
      // 'FileTypeExtension' => string 'png' (length=3)