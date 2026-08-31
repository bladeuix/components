<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render indicator with default classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item>
                <x-badge color="primary">New</x-badge>
            </x-indicator-item>
            <div class="grid w-32 h-32 rounded bg-base-300 place-items-center">content</div>
        </x-indicator>
    BLADE);

    $view->assertSeeHtmlInOrder(values: [
        '<div class="indicator">',
        '<div class="indicator-item">',
        'New',
        '</div>',
        '<div class="grid w-32 h-32 rounded bg-base-300 place-items-center">content</div>',
        '</div>',
    ]);
});

it(description: 'can render indicator item with horizontal start', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item horizontal="start">
                <x-badge>8</x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-start', escape: false);
});

it(description: 'can render indicator item with horizontal center', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item horizontal="center">
                <x-badge></x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-center', escape: false);
});

it(description: 'can render indicator item with horizontal end', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item horizontal="end">
                <x-badge></x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-end', escape: false);
});

it(description: 'can render indicator item with vertical top', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item vertical="top">
                <x-badge></x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-top', escape: false);
});

it(description: 'can render indicator item with vertical middle', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item vertical="middle" horizontal="center">
                <x-badge></x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-center indicator-middle', escape: false);
});

it(description: 'can render indicator item with vertical bottom', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item vertical="bottom" horizontal="end">
                <x-badge></x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item indicator-end indicator-bottom', escape: false);
});

it(description: 'can render indicator with custom classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator class="my-6 mx-10">
            <x-indicator-item vertical="bottom">
                <x-button color="primary">Apply</x-button>
            </x-indicator-item>
            <div class="card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Job Title</h2>
                    <p>Rerum reiciendis beatae tenetur excepturi</p>
                </div>
            </div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'class="indicator my-6 mx-10"', escape: false);
});

it(description: 'can render indicator with additional attributes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator id="notifications" data-controller="notifications">
            <x-indicator-item>
                <x-badge color="secondary">5</x-badge>
            </x-indicator-item>
            <div>content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'id="notifications"', escape: false);
    $view->assertSee(value: 'data-controller="notifications"', escape: false);
});

it(description: 'can render indicator with status indicator item', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item>
                <x-status color="success"></x-status>
            </x-indicator-item>
            <div class="grid w-32 h-32 rounded bg-base-300 place-items-center">content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'status status-success', escape: false);
});

it(description: 'can render indicator with badge indicator item', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item>
                <x-badge color="primary">New</x-badge>
            </x-indicator-item>
            <div class="grid w-32 h-32 rounded bg-base-300 place-items-center">content</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'badge badge-primary', escape: false);
});

it(description: 'can render indicator with button element', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item>
                <x-badge color="secondary">12</x-badge>
            </x-indicator-item>
            <x-button>inbox</x-button>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'inbox', escape: false);
});

it(description: 'can render indicator with image', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item horizontal="center" vertical="middle">
                <x-badge>Only available for Pro users</x-badge>
            </x-indicator-item>
            <img alt="Photo" class="rounded" src="/image.jpg" />
        </x-indicator>
    BLADE);

    $view->assertSee(value: '<img alt="Photo" class="rounded" src="/image.jpg" />', escape: false);
    $view->assertSee(value: 'indicator-center indicator-middle', escape: false);
});

it(description: 'can render multiple indicator items', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item horizontal="start" vertical="top">↖︎</x-indicator-item>
            <x-indicator-item horizontal="center" vertical="top">↑</x-indicator-item>
            <x-indicator-item horizontal="end" vertical="top">↗︎</x-indicator-item>
            <x-indicator-item horizontal="start" vertical="middle">←</x-indicator-item>
            <x-indicator-item horizontal="center" vertical="middle">●</x-indicator-item>
            <x-indicator-item horizontal="end" vertical="middle">→</x-indicator-item>
            <x-indicator-item horizontal="start" vertical="bottom">↙︎</x-indicator-item>
            <x-indicator-item horizontal="center" vertical="bottom">↓</x-indicator-item>
            <x-indicator-item horizontal="end" vertical="bottom">↘︎</x-indicator-item>
            <div class="grid w-60 h-32 bg-base-300 place-items-center">Box</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-start indicator-top', escape: false);
    $view->assertSee(value: 'indicator-center indicator-top', escape: false);
    $view->assertSee(value: 'indicator-end indicator-top', escape: false);
    $view->assertSee(value: 'indicator-start indicator-middle', escape: false);
    $view->assertSee(value: 'indicator-center indicator-middle', escape: false);
    $view->assertSee(value: 'indicator-end indicator-middle', escape: false);
    $view->assertSee(value: 'indicator-start indicator-bottom', escape: false);
    $view->assertSee(value: 'indicator-center indicator-bottom', escape: false);
    $view->assertSee(value: 'indicator-end indicator-bottom', escape: false);
});

it(description: 'can render indicator item with custom classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item class="my-custom">content</x-indicator-item>
            <div>main</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'indicator-item my-custom', escape: false);
});

it(description: 'can render indicator item with additional attributes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-indicator>
            <x-indicator-item id="badge-1" data-tooltip="info">content</x-indicator-item>
            <div>main</div>
        </x-indicator>
    BLADE);

    $view->assertSee(value: 'id="badge-1"', escape: false);
    $view->assertSee(value: 'data-tooltip="info"', escape: false);
});
