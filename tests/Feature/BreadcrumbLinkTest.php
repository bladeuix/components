<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render breadcrumb link with href', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumb-link href="/">Home</x-daisyui::breadcrumb-link>');

    $view->assertSeeHtmlInOrder(values: [
        '<li>',
        '<a href="/"',
        'Home',
        '</a>',
        '</li>',
    ]);
});

it(description: 'can render breadcrumb link without href as current', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumb-link>Current Page</x-daisyui::breadcrumb-link>');

    $view->assertSeeHtmlInOrder(values: [
        '<li>',
        '<span aria-current="page">',
        'Current Page',
        '</span>',
        '</li>',
    ]);
});

it(description: 'can render breadcrumb link with custom class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumb-link href="/" class="text-blue-500">Home</x-daisyui::breadcrumb-link>');

    $view->assertSee(value: 'class="text-blue-500"', escape: false);
});

it(description: 'can render breadcrumb link with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumb-link href="/" target="_blank" id="home-link">Home</x-daisyui::breadcrumb-link>');

    $view->assertSee(value: 'target="_blank"', escape: false);
    $view->assertSee(value: 'id="home-link"', escape: false);
});
