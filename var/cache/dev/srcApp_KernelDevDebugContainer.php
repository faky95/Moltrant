<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJThPOCK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJThPOCK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJThPOCK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJThPOCK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJThPOCK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JThPOCK',
    'container.build_id' => '566c0bba',
    'container.build_time' => 1555605175,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJThPOCK');
