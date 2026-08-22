<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render button with default classes', closure: function () {
    $view = $this->blade(template: '<x-button>Default Button</x-button>');

    $view->assertSeeHtmlInOrder(values: [
        '<button class="btn">',
        'Default Button',
        '</button>',
    ]);
});

it(description: 'can render button with sizes class', closure: function () {
    $view = $this->blade(template: '<x-button size="lg"></x-button>');

    $view->assertSee(value: '<button class="btn btn-lg">', escape: false);
});

it(description: 'can render button with color class', closure: function () {
    $view = $this->blade(template: '<x-button color="primary"></x-button>');

    $view->assertSee(value: '<button class="btn btn-primary">', escape: false);
});

it(description: 'can render button with state class', closure: function () {
    $view = $this->blade(template: '<x-button state="disabled"></x-button>');

    $view->assertSee(value: '<button class="btn btn-disabled">', escape: false);
});

it(description: 'can render button with all shape classes', closure: function () {
    $view = $this->blade(template: '<x-button shape="wide"></x-button>');

    $view->assertSee(value: '<button class="btn btn-wide">', escape: false);
});

it(description: 'can render button with soft variant', closure: function () {
    $view = $this->blade(template: '<x-button variant="soft"></x-button>');

    $view->assertSee(value: '<button class="btn btn-soft">', escape: false);
});

it(description: 'can render button with outline variant', closure: function () {
    $view = $this->blade(template: '<x-button variant="outline"></x-button>');

    $view->assertSee(value: '<button class="btn btn-outline">', escape: false);
});

it(description: 'can render button with dashed variant', closure: function () {
    $view = $this->blade(template: '<x-button variant="dashed"></x-button>');

    $view->assertSee(value: '<button class="btn btn-dash">', escape: false);
});

it(description: 'can render button with ghost variant', closure: function () {
    $view = $this->blade(template: '<x-button variant="ghost"></x-button>');

    $view->assertSee(value: '<button class="btn btn-ghost">', escape: false);
});

it(description: 'can render button with link variant', closure: function () {
    $view = $this->blade(template: '<x-button variant="link"></x-button>');

    $view->assertSee(value: '<button class="btn btn-link">', escape: false);
});

it(description: 'can render button with class modifiers', closure: function () {
    $view = $this->blade(template: '<x-button class="lg:btn-wide xl:btn-block"></x-button>');

    $view->assertSee(value: '<button class="btn lg:btn-wide xl:btn-block">', escape: false);
});
