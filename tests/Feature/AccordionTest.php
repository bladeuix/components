<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render accordion with default classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion>
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100"', escape: false);
    $view->assertSee(value: '<summary class="collapse-title">Title</summary>', escape: false);
    $view->assertSee(value: '<div class="collapse-content">Content</div>', escape: false);
    $view->assertDontSee(value: 'name="', escape: false);
    $view->assertDontSee(value: 'collapse-close', escape: false);
    $view->assertDontSee(value: 'collapse-open', escape: false);
});

it(description: 'can render accordion without default border classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion :border="false">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse"', escape: false);
    $view->assertDontSee(value: 'border-base-300', escape: false);
    $view->assertDontSee(value: 'bg-base-100', escape: false);
});

it(description: 'can render accordion with title slot', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion>
            <x-slot:title>My Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: '<summary class="collapse-title">My Title</summary>', escape: false);
});

it(description: 'can render accordion with title slot attributes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion>
            <x-slot:title class="text-lg font-bold">Custom Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse-title text-lg font-bold"', escape: false);
    $view->assertSee(value: 'Custom Title', escape: false);
});

it(description: 'can render accordion with title slot HTML content', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion>
            <x-slot:title><div class="font-semibold">Slot Title</div></x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: '<summary class="collapse-title"><div class="font-semibold">Slot Title</div></summary>', escape: false);
});

it(description: 'can render accordion with name attribute', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion name="my-accordion">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'name="my-accordion"', escape: false);
});

it(description: 'does not render name attribute when name is not provided', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion>
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertDontSee(value: 'name="', escape: false);
});

it(description: 'can render accordion with open attribute', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion open>
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: '<details open="open" class="collapse border border-base-300 bg-base-100 collapse-open">', escape: false);
});

it(description: 'can render accordion with forced close state', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion :open="false">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100 collapse-close"', escape: false);
    $view->assertDontSee(value: '<details open', escape: false);
});

it(description: 'can render accordion with arrow icon', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion icon="arrow">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'collapse-arrow', escape: false);
});

it(description: 'can render accordion with plus icon', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion icon="plus">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'collapse-plus', escape: false);
});

it(description: 'can render accordion with custom classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion class="w-full max-w-md">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100 w-full max-w-md"', escape: false);
});

it(description: 'can render accordion with custom border and background classes', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-accordion :border="false" class="border border-primary bg-base-200">
            <x-slot:title>Title</x-slot:title>
            Content
        </x-accordion>
    BLADE);

    $view->assertSee(value: 'class="collapse border border-primary bg-base-200"', escape: false);
});
