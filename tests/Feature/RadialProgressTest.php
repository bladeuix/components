<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render radial progress with default attributes', closure: function () {
    $view = $this->blade(template: '<x-radial-progress>70%</x-radial-progress>');

    $view->assertSee(value: 'class="radial-progress"', escape: false);
    $view->assertSee(value: 'role="progressbar"', escape: false);
    $view->assertSee(value: 'aria-valuenow="0"', escape: false);
    $view->assertSee(value: 'style="--value: 0; --size: 80px; --thickness: 8px;"', escape: false);
    $view->assertSee(value: '70%', escape: false);
});

it(description: 'can render radial progress with custom value', closure: function () {
    $view = $this->blade(template: '<x-radial-progress value="80">80%</x-radial-progress>');

    $view->assertSee(value: 'aria-valuenow="80"', escape: false);
    $view->assertSee(value: 'style="--value: 80; --size: 80px; --thickness: 8px;"', escape: false);
});

it(description: 'can render radial progress with custom size', closure: function () {
    $view = $this->blade(template: '<x-radial-progress size="120">70%</x-radial-progress>');

    $view->assertSee(value: 'style="--value: 0; --size: 120px; --thickness: 8px;"', escape: false);
});

it(description: 'can render radial progress with custom thickness', closure: function () {
    $view = $this->blade(template: '<x-radial-progress thickness="20">70%</x-radial-progress>');

    $view->assertSee(value: 'style="--value: 0; --size: 80px; --thickness: 20px;"', escape: false);
});

it(description: 'can render radial progress with custom colors via classes', closure: function () {
    $view = $this->blade(template: '<x-radial-progress class="text-primary">70%</x-radial-progress>');

    $view->assertSee(value: 'class="radial-progress text-primary"', escape: false);
});

it(description: 'can merge custom attributes', closure: function () {
    $view = $this->blade(template: '<x-radial-progress id="my-radial" data-test="custom">70%</x-radial-progress>');

    $view->assertSee(value: 'id="my-radial"', escape: false);
    $view->assertSee(value: 'data-test="custom"', escape: false);
});
