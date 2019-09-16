<?php

namespace App\Services\File;

use App\Services\File\Template\iFileService;

class FileService implements iFileService {
    protected $fileService;

    public function __construct(iFileService $fileService) {
        $this->fileService = $fileService;
    }

    public function addToDatabase ($data){
        return $this->fileService->addToDatabase($data);
    }
}

?>