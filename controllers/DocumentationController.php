<?php

class DocumentationController {
    private $root;

    public function __construct ($root)
    {
        $this->root = $root;
    }

    public function index ()
    {
        return file_get_contents($this->root . '/../api.html');
    }
}
