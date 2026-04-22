<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render badge with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge>Badge</x-daisyui::badge>');

    $view->assertSeeHtmlInOrder(values: [
        '<span class="badge">',
        'Badge',
        '</span>',
    ]);
});

it(description: 'can render badge with size class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge size="lg">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-lg">Badge</span>', escape: false);
});

it(description: 'can render badge with color class', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge color="primary">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-primary">Badge</span>', escape: false);
});

it(description: 'can render badge with soft variant', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge variant="soft">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-soft">Badge</span>', escape: false);
});

it(description: 'can render badge with outline variant', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge variant="outline">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-outline">Badge</span>', escape: false);
});

it(description: 'can render badge with dash variant', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge variant="dash">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-dash">Badge</span>', escape: false);
});

it(description: 'can render badge with ghost variant', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge variant="ghost">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-ghost">Badge</span>', escape: false);
});

it(description: 'can render badge with combined classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge size="sm" color="success" variant="soft">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge badge-sm badge-success badge-soft">Badge</span>', escape: false);
});

it(description: 'can render badge with custom classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge class="uppercase tracking-wide">Badge</x-daisyui::badge>');

    $view->assertSee(value: '<span class="badge uppercase tracking-wide">Badge</span>', escape: false);
});

it(description: 'can render badge with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::badge id="badge-id" aria-label="Notification badge">Badge</x-daisyui::badge>');

    $view->assertSee(value: 'id="badge-id"', escape: false);
    $view->assertSee(value: 'aria-label="Notification badge"', escape: false);
    $view->assertSee(value: 'class="badge"', escape: false);
});
