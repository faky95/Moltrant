<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/templating/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/FilesystemLoader.php';

return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
