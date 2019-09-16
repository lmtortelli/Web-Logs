<?php

namespace App\Domain\File;

use App\Domain\File\iFileFormat;
use App\Services\File\Format\FileJsonService;
use App\Services\File\FileService;

    class JsonFileFormat implements iFileFormat {
        public function parse($pathFile) {
            $fileService = new FileService(new FileJsonService());
            
            // Open file by parameter pathFile
            $fileOpen = fopen($pathFile, "r");
            
            while(!feof($fileOpen)){

                // Get a line on log's file
                $request_line = fgets($fileOpen);
                
                // Decode row in file text with a json format
                $json = json_decode($request_line, true);
            
                // Call File service to add data in database
                $fileService->addToDatabase($json);
                
            }
            
            return $pathFile . "Json Format";
        }
    }
?>