<?php

interface CloudHostingProviderInterface {
    public function createServer($region);
    public function listServers($region);
}