<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQUDIn50\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQUDIn50/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQUDIn50.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQUDIn50\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQUDIn50\App_KernelDevDebugContainer([
    'container.build_hash' => 'QUDIn50',
    'container.build_id' => '409f3047',
    'container.build_time' => 1680995805,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQUDIn50');
