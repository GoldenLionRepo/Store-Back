<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4w6rrvu\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4w6rrvu/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4w6rrvu.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4w6rrvu\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4w6rrvu\appProdProjectContainer(array(
    'container.build_hash' => '4w6rrvu',
    'container.build_id' => '6933bde0',
    'container.build_time' => 1548987202,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4w6rrvu');
