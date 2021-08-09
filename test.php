<?php

define('cBASEPATH', '');
$dir = new \DirectoryIterator(dirname(__FILE__));

foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->getExtension() == "php") {
        require_once($fileinfo->getPathname());
    }
}
