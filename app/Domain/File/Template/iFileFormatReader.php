<?php

namespace App\Domain\File\Template;

interface iFileFormatReader {

        // Return array of objects
        public function parse($pathFile);
}

?>