<?php

class Dropbox implements CloudStorageProviderInterface {

    public function storeFile($name) {
        echo "store a file on Dropbox";
    }

    public function getFile($name) {
        echo "get a file from Dropbox";
    }
}