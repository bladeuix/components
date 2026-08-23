<?php

declare(strict_types=1);

it(description: 'loads package documentation translations', closure: function () {
    $loader = app('translation.loader');

    app()->setLocale('en');

    expect($loader->load('en', '*', '*')['Button'] ?? null)->toBe('Button')
        ->and(__('Button'))->toBe('Button');

    app()->setLocale('es');

    expect(__('Button'))->toBe('Botón');
});
