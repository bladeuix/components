<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render alert with default classes', closure: function () {
    $view = $this->blade(template: '<x-alert>Alert message</x-alert>');

    $view->assertSeeHtmlInOrder(values: [
        '<div role="alert"',
        'class="alert"',
        '>Alert message</div>',
    ]);
});

it(description: 'can render alert with info color', closure: function () {
    $view = $this->blade(template: '<x-alert color="info">Info alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-info"', escape: false);
});

it(description: 'can render alert with success color', closure: function () {
    $view = $this->blade(template: '<x-alert color="success">Success alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-success"', escape: false);
});

it(description: 'can render alert with warning color', closure: function () {
    $view = $this->blade(template: '<x-alert color="warning">Warning alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-warning"', escape: false);
});

it(description: 'can render alert with error color', closure: function () {
    $view = $this->blade(template: '<x-alert color="error">Error alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-error"', escape: false);
});

it(description: 'can render alert with outline style', closure: function () {
    $view = $this->blade(template: '<x-alert style="outline">Outline alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-outline"', escape: false);
});

it(description: 'can render alert with dash style', closure: function () {
    $view = $this->blade(template: '<x-alert style="dash">Dash alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-dash"', escape: false);
});

it(description: 'can render alert with soft style', closure: function () {
    $view = $this->blade(template: '<x-alert style="soft">Soft alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-soft"', escape: false);
});

it(description: 'can render alert with vertical direction', closure: function () {
    $view = $this->blade(template: '<x-alert direction="vertical">Vertical alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-vertical"', escape: false);
});

it(description: 'can render alert with horizontal direction', closure: function () {
    $view = $this->blade(template: '<x-alert direction="horizontal">Horizontal alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-horizontal"', escape: false);
});

it(description: 'can render alert with combined classes', closure: function () {
    $view = $this->blade(template: '<x-alert color="info" style="soft" direction="horizontal">Combined alert</x-alert>');

    $view->assertSee(value: 'class="alert alert-info alert-horizontal alert-soft"', escape: false);
});

it(description: 'can render alert with custom classes', closure: function () {
    $view = $this->blade(template: '<x-alert class="my-custom-alert">Custom alert</x-alert>');

    $view->assertSee(value: 'class="alert my-custom-alert"', escape: false);
});

it(description: 'can render alert with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-alert id="alert-id" aria-live="polite">Attribute alert</x-alert>');

    $view->assertSee(value: 'id="alert-id"', escape: false);
    $view->assertSee(value: 'aria-live="polite"', escape: false);
    $view->assertSee(value: 'role="alert"', escape: false);
});

it(description: 'can render alert with slot content', closure: function () {
    $view = $this->blade(template: '<x-alert><span>Slot content</span></x-alert>');

    $view->assertSee(value: '<span>Slot content</span>', escape: false);
});

it(description: 'can render empty alert', closure: function () {
    $view = $this->blade(template: '<x-alert></x-alert>');

    $view->assertSee(value: 'role="alert"', escape: false);
    $view->assertSee(value: 'class="alert"', escape: false);
});
