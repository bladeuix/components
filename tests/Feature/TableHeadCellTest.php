<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render table head cell with custom classes and attributes', closure: function () {
    $view = $this->blade(template: '<x-table-head-cell scope="col" class="text-primary">Name</x-table-head-cell>');

    $view->assertSee(value: '<th', escape: false);
    $view->assertSee(value: 'scope="col"', escape: false);
    $view->assertSee(value: 'class="text-primary"', escape: false);
    $view->assertSee(value: '>Name</th>', escape: false);
});

it(description: 'can render table head cell with value prop', closure: function () {
    $view = $this->blade(template: '<x-table-head-cell value="Name"></x-table-head-cell>');

    $view->assertSee(value: '<th >Name</th>', escape: false);
});

it(description: 'can render table head cell with html slot content', closure: function () {
    $view = $this->blade(template: '<x-table-head-cell><span class="font-bold">Name</span></x-table-head-cell>');

    $view->assertSee(value: '<th ><span class="font-bold">Name</span></th>', escape: false);
});

it(description: 'prefers table head cell value prop over slot content', closure: function () {
    $view = $this->blade(template: '<x-table-head-cell value="Name">Ignored</x-table-head-cell>');

    $view->assertSee(value: '<th >Name</th>', escape: false);
    $view->assertDontSee(value: '>Ignored</th>', escape: false);
});
