<?php

namespace App\Domain\File;

interface iFileFormat {

        // Return array of objects
        public function parse($pathFile);
}

?>