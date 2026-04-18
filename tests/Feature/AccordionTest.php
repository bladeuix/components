<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

use Illuminate\View\ComponentSlot;
use BladeUix\DaisyUi\View\Components\Accordion;

it(description: 'can render accordion with default classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse bg-base-100 border border-base-300"', escape: false);
    $view->assertSee(value: '<summary class="collapse-title">Title</summary>', escape: false);
    $view->assertSee(value: '<div class="collapse-content">Content</div>', escape: false);
    $view->assertDontSee(value: 'name="', escape: false);
});

it(description: 'can render accordion with title prop', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion title="My Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: '<summary class="collapse-title">My Title</summary>', escape: false);
});

it(description: 'prefers title slot over title prop', closure: function () {
    $component = new Accordion(title: 'Prop Title');

    expect($component->titleContent([
        'title' => new ComponentSlot('<div class="font-semibold">Slot Title</div>'),
    ]))->toBe('<div class="font-semibold">Slot Title</div>');
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

    $view->assertSee(value: 'open', escape: false);
});

it(description: 'can render accordion with arrow icon', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion icon="arrow" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-arrow', escape: false);
});

it(description: 'can render accordion with plus icon', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion icon="plus" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-plus', escape: false);
});

it(description: 'can render accordion with open state', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion state="open" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-open', escape: false);
});

it(description: 'can render accordion with close state', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion state="close" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'collapse-close', escape: false);
});

it(description: 'can render accordion with custom classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::accordion class="w-full max-w-md" title="Title">Content</x-daisyui::accordion>');

    $view->assertSee(value: 'class="collapse bg-base-100 border border-base-300 w-full max-w-md"', escape: false);
});
