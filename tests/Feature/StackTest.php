<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render stack with default classes', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack>
            <div>Item 1</div>
            <div>Item 2</div>
        </x-stack>
    blade);

    $view->assertSeeHtmlInOrder(values: [
        '<div class="stack">',
        '<div>Item 1</div>',
        '<div>Item 2</div>',
        '</div>',
    ]);
});

it(description: 'can render stack with top direction', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack direction="top">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack stack-top"', escape: false);
});

it(description: 'can render stack with bottom direction', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack direction="bottom">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack stack-bottom"', escape: false);
});

it(description: 'can render stack with start direction', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack direction="start">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack stack-start"', escape: false);
});

it(description: 'can render stack with end direction', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack direction="end">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack stack-end"', escape: false);
});

it(description: 'can render stack with custom classes', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack class="h-20 w-32">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack h-20 w-32"', escape: false);
});

it(description: 'can render stack with additional attributes', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack id="stack-id" aria-label="Stack container">
            <div>Item 1</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'id="stack-id"', escape: false);
    $view->assertSee(value: 'aria-label="Stack container"', escape: false);
    $view->assertSee(value: 'class="stack"', escape: false);
});

it(description: 'can render stack with complex content', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <x-stack class="h-20 w-32">
            <div class="grid rounded-box bg-primary text-primary-content place-content-center">1</div>
            <div class="grid rounded-box bg-accent text-accent-content place-content-center">2</div>
            <div class="grid rounded-box bg-secondary text-secondary-content place-content-center">3</div>
        </x-stack>
    blade);

    $view->assertSee(value: 'class="stack h-20 w-32"', escape: false);
    $view->assertSee(value: 'bg-primary', escape: false);
    $view->assertSee(value: 'bg-accent', escape: false);
    $view->assertSee(value: 'bg-secondary', escape: false);
});
