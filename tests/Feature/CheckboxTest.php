<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render checkbox with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);
});

it(description: 'can render checkbox with color and size classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox color="primary" size="lg" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox checkbox-lg checkbox-primary">', escape: false);
});

it(description: 'can render checkbox with checked and disabled attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox checked disabled />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox" checked="checked" disabled="disabled">', escape: false);
});

it(description: 'does not allow custom type attributes to override checkbox type', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox type="radio" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);

    $view = $this->blade(template: '<x-daisyui::checkbox label="Remember me" type="radio" />');

    $view->assertSee(value: '<label class="label"><input type="checkbox" class="checkbox"> Remember me</label>', escape: false);
});

it(description: 'can render checkbox with a label', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox label="Remember me" checked />');

    $view->assertSee(value: '<label class="label"><input type="checkbox" class="checkbox" checked="checked"> Remember me</label>', escape: false);
});

it(description: 'can render checkbox with an empty label', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox label="" />');

    $view->assertSee(value: '<label class="label"><input type="checkbox" class="checkbox"> </label>', escape: false);
});

it(description: 'ignores unsupported checkbox color and size values', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox color="invalid" size="invalid" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);
});

it(description: 'can render checkbox with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::checkbox class="border-indigo-600" id="terms" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox border-indigo-600" id="terms">', escape: false);
});
