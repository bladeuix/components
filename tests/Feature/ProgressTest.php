<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render progress with default classes', closure: function () {
    $view = $this->blade(template: '<x-progress />');

    $view->assertSee(value: '<progress class="progress"></progress>', escape: false);
});

it(description: 'can render progress with value and max', closure: function () {
    $view = $this->blade(template: '<x-progress value="40" max="100" />');

    $view->assertSee(value: 'class="progress"', escape: false);
    $view->assertSee(value: 'value="40"', escape: false);
    $view->assertSee(value: 'max="100"', escape: false);
});

it(description: 'can render progress with color class', closure: function () {
    $view = $this->blade(template: '<x-progress color="primary" value="50" />');

    $view->assertSee(value: 'class="progress progress-primary"', escape: false);
    $view->assertSee(value: 'value="50"', escape: false);
    $view->assertSee(value: 'max="100"', escape: false);
});

it(description: 'is indeterminate when value is null', closure: function () {
    $view = $this->blade(template: '<x-progress :value="null" />');

    $view->assertDontSee(value: 'value=', escape: false);
    $view->assertDontSee(value: 'max=', escape: false);
    $view->assertSee(value: '<progress class="progress"></progress>', escape: false);
});

it(description: 'can render progress with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-progress class="w-56" id="test-progress" />');

    $view->assertSee(value: 'class="progress w-56"', escape: false);
    $view->assertSee(value: 'id="test-progress"', escape: false);
});
