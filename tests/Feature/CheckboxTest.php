<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render checkbox with default classes', closure: function () {
    $view = $this->blade(template: '<x-checkbox />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);
});

it(description: 'can render checkbox with color and size classes', closure: function () {
    $view = $this->blade(template: '<x-checkbox color="primary" size="lg" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox checkbox-lg checkbox-primary">', escape: false);
});

it(description: 'can render checkbox with checked and disabled attributes', closure: function () {
    $view = $this->blade(template: '<x-checkbox checked disabled />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox" checked="checked" disabled="disabled">', escape: false);
});

it(description: 'does not allow custom type attributes to override checkbox type', closure: function () {
    $view = $this->blade(template: '<x-checkbox type="radio" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);
});

it(description: 'ignores unsupported checkbox color and size values', closure: function () {
    $view = $this->blade(template: '<x-checkbox color="invalid" size="invalid" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox">', escape: false);
});

it(description: 'can render checkbox with custom attributes', closure: function () {
    $view = $this->blade(template: '<x-checkbox class="border-indigo-600" id="terms" />');

    $view->assertSee(value: '<input type="checkbox" class="checkbox border-indigo-600" id="terms">', escape: false);
});
