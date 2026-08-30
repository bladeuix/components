<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render divider with default classes', closure: function () {
    $view = $this->blade(template: '<x-divider>OR</x-divider>');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="divider">',
        'OR',
        '</div>',
    ]);
});

it(description: 'can render divider with color class', closure: function () {
    $view = $this->blade(template: '<x-divider color="primary">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-primary">OR</div>', escape: false);
});

it(description: 'can render divider with neutral color', closure: function () {
    $view = $this->blade(template: '<x-divider color="neutral">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-neutral">OR</div>', escape: false);
});

it(description: 'can render divider with secondary color', closure: function () {
    $view = $this->blade(template: '<x-divider color="secondary">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-secondary">OR</div>', escape: false);
});

it(description: 'can render divider with accent color', closure: function () {
    $view = $this->blade(template: '<x-divider color="accent">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-accent">OR</div>', escape: false);
});

it(description: 'can render divider with info color', closure: function () {
    $view = $this->blade(template: '<x-divider color="info">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-info">OR</div>', escape: false);
});

it(description: 'can render divider with success color', closure: function () {
    $view = $this->blade(template: '<x-divider color="success">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-success">OR</div>', escape: false);
});

it(description: 'can render divider with warning color', closure: function () {
    $view = $this->blade(template: '<x-divider color="warning">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-warning">OR</div>', escape: false);
});

it(description: 'can render divider with error color', closure: function () {
    $view = $this->blade(template: '<x-divider color="error">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-error">OR</div>', escape: false);
});

it(description: 'can render divider with horizontal direction', closure: function () {
    $view = $this->blade(template: '<x-divider direction="horizontal">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-horizontal">OR</div>', escape: false);
});

it(description: 'can render divider with vertical direction', closure: function () {
    $view = $this->blade(template: '<x-divider direction="vertical">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-vertical">OR</div>', escape: false);
});

it(description: 'can render divider with start placement', closure: function () {
    $view = $this->blade(template: '<x-divider placement="start">Start</x-divider>');

    $view->assertSee(value: '<div class="divider divider-start">Start</div>', escape: false);
});

it(description: 'can render divider with end placement', closure: function () {
    $view = $this->blade(template: '<x-divider placement="end">End</x-divider>');

    $view->assertSee(value: '<div class="divider divider-end">End</div>', escape: false);
});

it(description: 'can render divider with combined classes', closure: function () {
    $view = $this->blade(template: '<x-divider color="primary" direction="horizontal" placement="start">OR</x-divider>');

    $view->assertSee(value: '<div class="divider divider-primary divider-horizontal divider-start">OR</div>', escape: false);
});

it(description: 'can render divider with custom classes', closure: function () {
    $view = $this->blade(template: '<x-divider class="my-custom-divider">OR</x-divider>');

    $view->assertSee(value: '<div class="divider my-custom-divider">OR</div>', escape: false);
});

it(description: 'can render divider with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-divider id="divider-id" aria-label="Section separator">OR</x-divider>');

    $view->assertSee(value: 'id="divider-id"', escape: false);
    $view->assertSee(value: 'aria-label="Section separator"', escape: false);
    $view->assertSee(value: 'class="divider"', escape: false);
});

it(description: 'can render empty divider', closure: function () {
    $view = $this->blade(template: '<x-divider></x-divider>');

    $view->assertSee(value: '<div class="divider"></div>', escape: false);
});
