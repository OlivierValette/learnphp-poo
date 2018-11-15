<?php

class Folder implements Sizable {
    
    private $content;
    
    public function __construct() {
        $this->content = [];
    }
    
    /**
     * Les éléments ajoutés dans le dossier doivent obligatoirement implémenter l'interface Sizable
     */
    public function addContent(Sizable $content) {
        array_push($this->content, $content);
    }
    
    public function setContent(array $content) {
        $this->content = $content;
    }
    
    public function getContent(): array {
        return $this->content;
    }
    
    public function getSize(): int {
        $size = 0;
        /**
         * Ici, on boucle sur le contenu du dossier.
         * Grace à l'interface Sizable, peu importe le type d'objet contenu dans la propriété "content".
         * Si l'ensemble des éléments de "content" implémentent l'interface Sizable, ils auront tous la méthode getSize().
         */
        foreach($this->content as $fileOrFolder) {
            $size += $fileOrFolder->getSize();
        }
        return $size;
    }

}
