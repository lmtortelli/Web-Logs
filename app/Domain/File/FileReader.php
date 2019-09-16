<?php

namespace App\Domain\File;

use App\Domain\File\iFileFormat;

    class FileReader {
        protected $fileFormat;

        public function __construct(iFileFormat $fileFormat) {
            $this->fileFormat = $fileFormat;
        }

        public function parse($pathFile){
            return $this->fileFormat->parse($pathFile);
        }
    }


?>