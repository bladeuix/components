<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render loading spinner with default classes', closure: function () {
    $view = $this->blade(template: '<x-loading></x-loading>');

    $view->assertSee(value: '<span class="loading loading-spinner"></span>', escape: false);
});

it(description: 'can render loading with type class', closure: function () {
    $view = $this->blade(template: '<x-loading type="dots"></x-loading>');

    $view->assertSee(value: '<span class="loading loading-dots"></span>', escape: false);
});

it(description: 'can render loading with size class', closure: function () {
    $view = $this->blade(template: '<x-loading size="lg"></x-loading>');

    $view->assertSee(value: '<span class="loading loading-spinner loading-lg"></span>', escape: false);
});

it(description: 'can render loading with color class', closure: function () {
    $view = $this->blade(template: '<x-loading color="primary"></x-loading>');

    $view->assertSee(value: '<span class="loading loading-spinner text-primary"></span>', escape: false);
});

it(description: 'can render loading with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-loading aria-label="Loading something" id="my-loader"></x-loading>');

    $view->assertSee(value: 'aria-label="Loading something"', escape: false);
    $view->assertSee(value: 'id="my-loader"', escape: false);
});

it(description: 'can render loading with custom classes', closure: function () {
    $view = $this->blade(template: '<x-loading class="custom-class"></x-loading>');

    $view->assertSee(value: 'class="loading loading-spinner custom-class"', escape: false);
});
