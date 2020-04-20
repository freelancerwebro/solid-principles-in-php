<?php

interface CloudStorageProviderInterface {
    public function storeFile($name);
    public function getFile($name);
}