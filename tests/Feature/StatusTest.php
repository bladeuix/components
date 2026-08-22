<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render status with default classes', closure: function () {
    $view = $this->blade(template: '<x-status />');

    $view->assertSee(value: '<span class="status"></span>', escape: false);
});

it(description: 'can render status with sizes class', closure: function () {
    $view = $this->blade(template: '<x-status size="lg" />');

    $view->assertSee(value: '<span class="status status-lg"></span>', escape: false);
});

it(description: 'can render status with color class', closure: function () {
    $view = $this->blade(template: '<x-status color="primary" />');

    $view->assertSee(value: '<span class="status status-primary"></span>', escape: false);
});

it(description: 'can render status with ping animation', closure: function () {
    $view = $this->blade(template: '<x-status animation="ping" color="error" />');

    $view->assertSeeHtmlInOrder(values: [
        '<span class="inline-grid *:[grid-area:1/1]">',
        '<span class="status status-error animate-ping"></span>',
        '<span class="status status-error"></span>',
        '</span>',
    ]);
});

it(description: 'can render status with bounce animation', closure: function () {
    $view = $this->blade(template: '<x-status animation="bounce" />');

    $view->assertSee(value: '<span class="status animate-bounce"></span>', escape: false);
});

it(description: 'can render status with attributes merging', closure: function () {
    $view = $this->blade(template: '<x-status id="test-status" aria-label="status icon" />');

    $view->assertSee(value: 'id="test-status"', escape: false);
    $view->assertSee(value: 'aria-label="status icon"', escape: false);
    $view->assertSee(value: 'class="status"', escape: false);
});
