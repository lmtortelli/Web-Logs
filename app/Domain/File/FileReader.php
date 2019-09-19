<?php

namespace App\Domain\File;

use App\Domain\File\Template\iFileFormatReader;

    class FileReader {
        protected $fileFormat;

        public function __construct(iFileFormatReader $fileFormat) {
            $this->fileFormat = $fileFormat;
        }

        public function parse($pathFile){
            return $this->fileFormat->parse($pathFile);
        }
    }


?>