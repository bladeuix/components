<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render breadcrumbs with default classes', closure: function () {
    $view = $this->blade(template: '<x-breadcrumbs></x-breadcrumbs>');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="breadcrumbs">',
        '<ul>',
        '</ul>',
        '</div>',
    ]);
});

it(description: 'can render breadcrumbs with custom class', closure: function () {
    $view = $this->blade(template: '<x-breadcrumbs class="text-sm"></x-breadcrumbs>');

    $view->assertSee(value: 'class="breadcrumbs text-sm"', escape: false);
});

it(description: 'can render breadcrumbs with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-breadcrumbs id="main-breadcrumbs"></x-breadcrumbs>');

    $view->assertSee(value: 'id="main-breadcrumbs"', escape: false);
});
