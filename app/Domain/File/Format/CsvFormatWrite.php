<?php

namespace App\Domain\File\Format;

use App\Domain\File\Template\iFileFormatWrite;

    class CsvFormatWrite implements iFileFormatWrite {
        
        public function write($data,$name) {
            $f = fopen($name.".csv", "w");
            foreach ($data as $line) {
                fputcsv($f, $line);
            }
        }
    }
?>