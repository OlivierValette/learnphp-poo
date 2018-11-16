<?php

class File implements Sizable{
    
    private $size;
    
    public function setSize(int $size) {
        $this->size = $size;
    }
    
    public function getSize(): int {
        return $this->size;
    }
}
