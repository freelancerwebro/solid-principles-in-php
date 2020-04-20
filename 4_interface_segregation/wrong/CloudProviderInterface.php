<?php

interface CloudProviderInterface {
    public function storeFile($name);
    public function getFile($name);
    public function createServer($region);
    public function listServers($region);
    public function getCDNAddress();
}