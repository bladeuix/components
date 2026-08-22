<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'uses the required name as the radio ID', closure: function () {
    $view = $this->blade(template: '<x-radio name="plan" id="other" />');

    $view->assertSee(value: '<input type="radio" name="plan" id="plan" class="radio">', escape: false);
});

it(description: 'can render radio with color and size classes', closure: function () {
    $view = $this->blade(template: '<x-radio name="plan" color="primary" size="lg" />');

    $view->assertSee(value: '<input type="radio" name="plan" id="plan" class="radio radio-lg radio-primary">', escape: false);
});

it(description: 'can render radio with checked and disabled attributes', closure: function () {
    $view = $this->blade(template: '<x-radio name="plan" checked disabled />');

    $view->assertSee(value: '<input type="radio" name="plan" id="plan" class="radio" checked="checked" disabled="disabled">', escape: false);
});

it(description: 'ignores unsupported radio color and size values', closure: function () {
    $view = $this->blade(template: '<x-radio name="plan" color="invalid" size="invalid" />');

    $view->assertSee(value: '<input type="radio" name="plan" id="plan" class="radio">', escape: false);
});

it(description: 'can render radio with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-radio name="plan" class="border-red-300" />');

    $view->assertSee(value: '<input type="radio" name="plan" id="plan" class="radio border-red-300">', escape: false);
});
