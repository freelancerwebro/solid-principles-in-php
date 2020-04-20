<?php

/**
 * The CloudProviderInterface class breaks the interface segregation principle,
 * because it forces Dropbox class to implement methods not supported by their service.
 * To fix this issue, we will break down CloudProviderInterface class into several pieces.
 * 
 */
class Dropbox implements CloudProviderInterface {
    
    public function storeFile($name) {
        echo "store a file on Dropbox";
    }

    public function getFile($name) {
        echo "get a file from Dropbox";
    }

    public function createServer($region) {
        // Not supported by Dropbox
    }

    public function listServers($region) {
        // Not supported by Dropbox   
    }

    public function getCDNAddress() {
        // Not supported by Dropbox
    } 
}