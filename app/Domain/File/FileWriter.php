<?php

namespace App\Domain\File;

use App\Domain\File\Template\iFileFormatWrite;

    class FileWriter {
        protected $fileFormat;

        public function __construct(iFileFormatWrite $fileFormat) {
            $this->fileFormat = $fileFormat;
        }

        public function write($data,$name){
            return $this->fileFormat->write($data,$name);
        }
    }


?>