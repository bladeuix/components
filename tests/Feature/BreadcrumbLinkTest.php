<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render breadcrumb link with href', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link href="/">Home</x-breadcrumb-link>');

    $view->assertSeeHtmlInOrder(values: [
        '<li>',
        '<a href="/"',
        'Home',
        '</a>',
        '</li>',
    ]);
});

it(description: 'can render breadcrumb link without href as current', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link>Current Page</x-breadcrumb-link>');

    $view->assertSee(value: '<span aria-current="page"', escape: false);
    $view->assertSeeHtmlInOrder(values: [
        '<li>',
        '<span',
        'Current Page',
        '</span>',
        '</li>',
    ]);
});

it(description: 'can render breadcrumb link with custom class', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link href="/" class="text-blue-500">Home</x-breadcrumb-link>');

    $view->assertSee(value: 'class="text-blue-500"', escape: false);
});

it(description: 'can render breadcrumb link with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link href="/" target="_blank" id="home-link">Home</x-breadcrumb-link>');

    $view->assertSee(value: 'target="_blank"', escape: false);
    $view->assertSee(value: 'id="home-link"', escape: false);
});

it(description: 'preserves custom attributes on current breadcrumb link', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link class="font-medium" id="current">Current Page</x-breadcrumb-link>');

    $view->assertSee(value: 'class="font-medium"', escape: false);
    $view->assertSee(value: 'id="current"', escape: false);
    $view->assertSee(value: 'aria-current="page"', escape: false);
});

it(description: 'can render breadcrumb link without href with target and id attributes', closure: function () {
    $view = $this->blade(template: '<x-breadcrumb-link target="_blank" id="home-link">Home</x-breadcrumb-link>');

    $view->assertSeeHtmlInOrder(values: [
        '<li>',
        '<span',
        'aria-current="page"',
        'target="_blank"',
        'id="home-link"',
        'Home',
        '</span>',
        '</li>',
    ]);
});
