<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5IbzZ7Y\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5IbzZ7Y/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5IbzZ7Y.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5IbzZ7Y\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5IbzZ7Y\App_KernelDevDebugContainer([
    'container.build_hash' => '5IbzZ7Y',
    'container.build_id' => '4f8e98c9',
    'container.build_time' => 1681260889,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5IbzZ7Y');
