<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render badge with default classes', closure: function () {
    $view = $this->blade(template: '<x-badge>Badge</x-badge>');

    $view->assertSeeHtmlInOrder(values: [
        '<span class="badge">',
        'Badge',
        '</span>',
    ]);
});

it(description: 'can render badge with size class', closure: function () {
    $view = $this->blade(template: '<x-badge size="lg">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-lg">Badge</span>', escape: false);
});

it(description: 'can render badge with color class', closure: function () {
    $view = $this->blade(template: '<x-badge color="primary">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-primary">Badge</span>', escape: false);
});

it(description: 'can render badge with soft variant', closure: function () {
    $view = $this->blade(template: '<x-badge variant="soft">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-soft">Badge</span>', escape: false);
});

it(description: 'can render badge with outline variant', closure: function () {
    $view = $this->blade(template: '<x-badge variant="outline">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-outline">Badge</span>', escape: false);
});

it(description: 'can render badge with dash variant', closure: function () {
    $view = $this->blade(template: '<x-badge variant="dash">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-dash">Badge</span>', escape: false);
});

it(description: 'can render badge with ghost variant', closure: function () {
    $view = $this->blade(template: '<x-badge variant="ghost">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-ghost">Badge</span>', escape: false);
});

it(description: 'can render badge with combined classes', closure: function () {
    $view = $this->blade(template: '<x-badge size="sm" color="success" variant="soft">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge badge-sm badge-success badge-soft">Badge</span>', escape: false);
});

it(description: 'can render badge with custom classes', closure: function () {
    $view = $this->blade(template: '<x-badge class="uppercase tracking-wide">Badge</x-badge>');

    $view->assertSee(value: '<span class="badge uppercase tracking-wide">Badge</span>', escape: false);
});

it(description: 'can render badge with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-badge id="badge-id" aria-label="Notification badge">Badge</x-badge>');

    $view->assertSee(value: 'id="badge-id"', escape: false);
    $view->assertSee(value: 'aria-label="Notification badge"', escape: false);
    $view->assertSee(value: 'class="badge"', escape: false);
});
