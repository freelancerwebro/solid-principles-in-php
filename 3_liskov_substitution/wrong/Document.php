<?php

class Document {
    protected $data;
    protected $filename;

    public function open()
    {
        echo "open document";
    }

    public function save()
    {
        echo "save document";
    }
}