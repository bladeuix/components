<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render swap with default classes', closure: function () {
    $view = $this->blade(template: '
        <x-swap>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSeeHtmlInOrder(values: [
        '<label class="swap">',
        'OFF',
        'ON',
        '</label>',
    ]);
});

it(description: 'can render swap with active class', closure: function () {
    $view = $this->blade(template: '
        <x-swap active>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap swap-active"', escape: false);
});

it(description: 'can render swap with rotate effect', closure: function () {
    $view = $this->blade(template: '
        <x-swap rotate>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap swap-rotate"', escape: false);
});

it(description: 'can render swap with flip effect', closure: function () {
    $view = $this->blade(template: '
        <x-swap flip>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap swap-flip"', escape: false);
});

it(description: 'can render swap with all modifiers', closure: function () {
    $view = $this->blade(template: '
        <x-swap active rotate flip>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap swap-active swap-rotate swap-flip"', escape: false);
});

it(description: 'can render swap with indeterminate slot', closure: function () {
    $view = $this->blade(template: '
        <x-swap>
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
            <x-slot:indeterminate>Middle</x-slot:indeterminate>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap"', escape: false);
    $view->assertSee(value: 'Middle', escape: false);
});

it(description: 'can render swap with custom classes', closure: function () {
    $view = $this->blade(template: '
        <x-swap class="text-6xl">
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap text-6xl"', escape: false);
});

it(description: 'can render swap with additional attributes', closure: function () {
    $view = $this->blade(template: '
        <x-swap id="swap-id">
            <x-slot:off>OFF</x-slot:off>
            <x-slot:on>ON</x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'id="swap-id"', escape: false);
    $view->assertSee(value: 'class="swap"', escape: false);
});

it(description: 'can render swap with SVG content', closure: function () {
    $view = $this->blade(template: '
        <x-swap>
            <x-slot:off><svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M3,9H7L12,4V20L7,15H3V9"/></svg></x-slot:off>
            <x-slot:on><svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23"/></svg></x-slot:on>
        </x-swap>
    ');

    $view->assertSee(value: 'class="swap"', escape: false);
    $view->assertSee(value: '<svg class="swap-off fill-current"', escape: false);
    $view->assertSee(value: '<svg class="swap-on fill-current"', escape: false);
});
