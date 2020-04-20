<?php

class Amazon implements CloudHostingProviderInterface, CloudStorageProviderInterface, CDNProviderInterface {
    
    public function storeFile($name) {
        echo "store a file on Amazon";
    }

    public function getFile($name) {
        echo "get a file from Amazon";
    }

    public function createServer($region) {
        echo "create server on Amazon";
    }

    public function listServers($region) {
        echo "list servers from Amazon";
    }

    public function getCDNAddress() {
        echo "get CDN address on Amazon";
    } 
}