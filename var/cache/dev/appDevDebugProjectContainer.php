<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBmkrqak\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBmkrqak/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBmkrqak.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBmkrqak\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBmkrqak\appDevDebugProjectContainer([
    'container.build_hash' => 'Bmkrqak',
    'container.build_id' => '67382c5a',
    'container.build_time' => 1593786937,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBmkrqak');