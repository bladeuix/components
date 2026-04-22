<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render table cell with custom classes and attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::table-cell data-label="name" class="font-bold">Cy Ganderton</x-daisyui::table-cell>');

    $view->assertSee(value: '<td', escape: false);
    $view->assertSee(value: 'data-label="name"', escape: false);
    $view->assertSee(value: 'class="font-bold"', escape: false);
    $view->assertSee(value: '>Cy Ganderton</td>', escape: false);
});

it(description: 'can render table cell with value prop', closure: function () {
    $view = $this->blade(template: '<x-daisyui::table-cell value="Cy Ganderton"></x-daisyui::table-cell>');

    $view->assertSee(value: '<td >Cy Ganderton</td>', escape: false);
});

it(description: 'can render table cell with html slot content', closure: function () {
    $view = $this->blade(template: '<x-daisyui::table-cell><span class="font-bold">Cy Ganderton</span></x-daisyui::table-cell>');

    $view->assertSee(value: '<td ><span class="font-bold">Cy Ganderton</span></td>', escape: false);
});

it(description: 'prefers table cell value prop over slot content', closure: function () {
    $view = $this->blade(template: '<x-daisyui::table-cell value="Cy Ganderton">Ignored</x-daisyui::table-cell>');

    $view->assertSee(value: '<td >Cy Ganderton</td>', escape: false);
    $view->assertDontSee(value: '>Ignored</td>', escape: false);
});
