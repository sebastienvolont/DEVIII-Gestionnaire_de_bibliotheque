<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQJPhGy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQJPhGy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYQJPhGy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYQJPhGy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYQJPhGy\App_KernelDevDebugContainer([
    'container.build_hash' => 'YQJPhGy',
    'container.build_id' => '8805672f',
    'container.build_time' => 1620060843,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQJPhGy');