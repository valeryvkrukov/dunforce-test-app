<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2LK8f94\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2LK8f94/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2LK8f94.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2LK8f94\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2LK8f94\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2LK8f94',
    'container.build_id' => '6b0ac5ca',
    'container.build_time' => 1663061167,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2LK8f94');
