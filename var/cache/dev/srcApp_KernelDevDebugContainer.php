<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRrFEloP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRrFEloP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRrFEloP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRrFEloP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRrFEloP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RrFEloP',
    'container.build_id' => 'ea6a3073',
    'container.build_time' => 1554459982,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRrFEloP');
