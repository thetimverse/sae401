<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSly3UzV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSly3UzV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSly3UzV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSly3UzV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSly3UzV\App_KernelDevDebugContainer([
    'container.build_hash' => 'Sly3UzV',
    'container.build_id' => 'a0812b7a',
    'container.build_time' => 1677492273,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSly3UzV');
