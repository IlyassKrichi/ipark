<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGzG02IM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGzG02IM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGzG02IM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGzG02IM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGzG02IM\App_KernelDevDebugContainer([
    'container.build_hash' => 'GzG02IM',
    'container.build_id' => '9ea1d15f',
    'container.build_time' => 1686160141,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGzG02IM');
