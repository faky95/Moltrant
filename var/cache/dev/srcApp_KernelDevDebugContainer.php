<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container36A0lFx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container36A0lFx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container36A0lFx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container36A0lFx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container36A0lFx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '36A0lFx',
    'container.build_id' => 'b3c135ca',
    'container.build_time' => 1554900727,
], __DIR__.\DIRECTORY_SEPARATOR.'Container36A0lFx');
