<?php
return [
    'templates' => [
        'extension' => 'html.twig',
        'paths' => [
            // namespace / path pairs
            //
            // Numeric namespaces imply the default/main namespace. Paths may be
            // strings or arrays of string paths to associate with the namespace.
        ],
    ],
    'twig' => [
        'autoescape' => 'html', // Auto-escaping strategy [html|js|css|url|false]
        'cache_dir' => 'path to cached templates',
        'assets_url' => 'base URL for assets',
        'assets_version' => 'base version for assets',
        'extensions' => [
            // extension service names or instances
        ],
        'globals' => [
            // Global variables passed to twig templates
            'ga_tracking' => 'UA-XXXXX-X'
        ],
        'optimizations' => -1, // -1: Enable all (default), 0: disable optimizations
        'runtime_loaders' => [
            // runtime loader names or instances
        ],
        'timezone' => 'default timezone identifier, e.g. America/New_York',
        'auto_reload' => true, // Recompile the template whenever the source code changes
    ],
];
