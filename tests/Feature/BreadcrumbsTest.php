<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render breadcrumbs with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumbs></x-daisyui::breadcrumbs>');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="breadcrumbs">',
        '<ul>',
        '</ul>',
        '</div>',
    ]);
});

it(description: 'can render breadcrumbs with custom class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumbs class="text-sm"></x-daisyui::breadcrumbs>');

    $view->assertSee(value: 'class="breadcrumbs text-sm"', escape: false);
});

it(description: 'can render breadcrumbs with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::breadcrumbs id="main-breadcrumbs"></x-daisyui::breadcrumbs>');

    $view->assertSee(value: 'id="main-breadcrumbs"', escape: false);
});
