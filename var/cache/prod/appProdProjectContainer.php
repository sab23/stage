<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBpxduqe\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBpxduqe/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerBpxduqe.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerBpxduqe\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerBpxduqe\appProdProjectContainer([
    'container.build_hash' => 'Bpxduqe',
    'container.build_id' => 'b0c03aa8',
    'container.build_time' => 1593699791,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBpxduqe');