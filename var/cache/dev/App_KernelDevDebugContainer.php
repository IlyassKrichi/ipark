<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDj2oGlK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDj2oGlK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDj2oGlK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDj2oGlK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDj2oGlK\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dj2oGlK',
    'container.build_id' => '5b3ef44c',
    'container.build_time' => 1681170958,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDj2oGlK');
