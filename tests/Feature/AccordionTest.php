<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render accordion with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100"', escape: false);
    $view->assertSee(value: '<summary class="collapse-title">Title</summary>', escape: false);
    $view->assertSee(value: '<div class="collapse-content">Content</div>', escape: false);
    $view->assertDontSee(value: 'name="', escape: false);
    $view->assertDontSee(value: 'collapse-close', escape: false);
    $view->assertDontSee(value: 'collapse-open', escape: false);
});

it(description: 'can render accordion without default border classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion :border="false" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse"', escape: false);
    $view->assertDontSee(value: 'border-base-300', escape: false);
    $view->assertDontSee(value: 'bg-base-100', escape: false);
});

it(description: 'can render accordion with title prop', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion title="My Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: '<summary class="collapse-title">My Title</summary>', escape: false);
});

it(description: 'prefers title slot over title prop', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-daisyui::accordion title="Prop Title">
            <x-slot:title>
                <div class="font-semibold">Slot Title</div>
            </x-slot:title>
            Content
        </x-daisyui::accordion>
    BLADE);

    $view->assertSee(value: '<summary class="collapse-title"><div class="font-semibold">Slot Title</div></summary>', escape: false);
    $view->assertDontSee(value: '<summary class="collapse-title">Prop Title</summary>', escape: false);
});

it(description: 'can render accordion with name attribute', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion name="my-accordion" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'name="my-accordion"', escape: false);
});

it(description: 'does not render name attribute when name is not provided', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion title="Title">Content</x-daisyui::accordion>');

    $view->assertDontSee(value: 'name="', escape: false);
});

it(description: 'can render accordion with open attribute', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion open title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: '<details open="open" class="collapse border border-base-300 bg-base-100 collapse-open">', escape: false);
});

it(description: 'can render accordion with forced close state', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion :open="false" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100 collapse-close"', escape: false);
    $view->assertDontSee(value: '<details open', escape: false);
});

it(description: 'can render accordion with arrow icon', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion icon="arrow" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-arrow', escape: false);
});

it(description: 'can render accordion with plus icon', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion icon="plus" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-plus', escape: false);
});

it(description: 'can render accordion with custom classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion class="w-full max-w-md" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse border border-base-300 bg-base-100 w-full max-w-md"', escape: false);
});

it(description: 'can render accordion with custom border and background classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion :border="false" class="border border-primary bg-base-200" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse border border-primary bg-base-200"', escape: false);
});
