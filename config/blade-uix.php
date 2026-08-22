<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Component Prefix
    |--------------------------------------------------------------------------
    |
    | Set the prefix for DaisyUI component aliases using BLADEUIX_COMPONENTS_PREFIX.
    | Leave it null to use standard Laravel aliases such as `<x-button>` tags.
    | Set `ui-` to use aliases like `<x-ui-button>` to avoid collisions.
    |
    */
    'prefix' => env(key: 'BLADEUIX_COMPONENTS_PREFIX'),
];
