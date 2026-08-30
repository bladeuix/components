<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render kbd with default classes', closure: function () {
    $view = $this->blade(template: '<x-kbd>Q</x-kbd>');

    $view->assertSeeHtmlInOrder(values: [
        '<kbd class="kbd">',
        'Q',
        '</kbd>',
    ]);
});

it(description: 'can render kbd with xs size', closure: function () {
    $view = $this->blade(template: '<x-kbd size="xs">X</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-xs">X</kbd>', escape: false);
});

it(description: 'can render kbd with sm size', closure: function () {
    $view = $this->blade(template: '<x-kbd size="sm">S</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-sm">S</kbd>', escape: false);
});

it(description: 'can render kbd with md size', closure: function () {
    $view = $this->blade(template: '<x-kbd size="md">M</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-md">M</kbd>', escape: false);
});

it(description: 'can render kbd with lg size', closure: function () {
    $view = $this->blade(template: '<x-kbd size="lg">L</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-lg">L</kbd>', escape: false);
});

it(description: 'can render kbd with xl size', closure: function () {
    $view = $this->blade(template: '<x-kbd size="xl">X</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-xl">X</kbd>', escape: false);
});

it(description: 'can render kbd with custom classes', closure: function () {
    $view = $this->blade(template: '<x-kbd class="my-custom-kbd">Q</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd my-custom-kbd">Q</kbd>', escape: false);
});

it(description: 'can render kbd with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-kbd id="kbd-id" aria-label="Keyboard key">Q</x-kbd>');

    $view->assertSee(value: 'id="kbd-id"', escape: false);
    $view->assertSee(value: 'aria-label="Keyboard key"', escape: false);
    $view->assertSee(value: 'class="kbd"', escape: false);
});

it(description: 'can render kbd with complex content', closure: function () {
    $view = $this->blade(template: '<x-kbd size="sm">ctrl</x-kbd>');

    $view->assertSee(value: '<kbd class="kbd kbd-sm">ctrl</kbd>', escape: false);
});
