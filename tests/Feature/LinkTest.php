<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render link with default classes', closure: function () {
    $view = $this->blade(template: '<x-link>Default Link</x-link>');

    $view->assertSeeHtmlInOrder(values: [
        '<a class="link">',
        'Default Link',
        '</a>',
    ]);
});

it(description: 'can render link with color class', closure: function () {
    $view = $this->blade(template: "<x-link color='primary'></x-link>");

    $view->assertSee(value: '<a class="link link-primary">', escape: false);
});

it(description: 'can render link with hover class', closure: function () {
    $view = $this->blade(template: '<x-link hover></x-link>');

    $view->assertSee(value: '<a class="link link-hover">', escape: false);
});

it(description: 'can render link with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-link href="https://example.com" target="_blank">Link</x-link>');

    $view->assertSee(value: 'href="https://example.com"', escape: false);
    $view->assertSee(value: 'target="_blank"', escape: false);
});
