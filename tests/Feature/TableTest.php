<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render table with default classes', closure: function () {
    $view = $this->blade(template: '<x-table></x-table>');

    $view->assertSeeHtmlInOrder(values: [
        '<table class="table">',
        '<tbody></tbody>',
        '</table>',
    ]);
});

it(description: 'can render table with modifier classes', closure: function () {
    $view = $this->blade(template: '<x-table zebra pin-rows pin-cols></x-table>');

    $view->assertSee(value: 'class="table table-zebra table-pin-rows table-pin-cols"', escape: false);
});

it(description: 'can render table with size class', closure: function () {
    $view = $this->blade(template: '<x-table size="xs"></x-table>');

    $view->assertSee(value: '<table class="table table-xs">', escape: false);
});

it(description: 'can render table with thead and tfoot slots', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-table>
            <x-slot:thead>
                <x-table-head-cell>Name</x-table-head-cell>
            </x-slot:thead>

            <x-table-row>
                <x-table-cell value="Cy Ganderton" />
            </x-table-row>

            <x-slot:tfoot>
                <x-table-head-cell>Total</x-table-head-cell>
            </x-slot:tfoot>
        </x-table>
    BLADE);

    $view->assertSee(value: '<thead>', escape: false);
    $view->assertSee(value: '<tr>', escape: false);
    $view->assertSee(value: '<th >Name</th>', escape: false);
    $view->assertSee(value: '<tbody>', escape: false);
    $view->assertSee(value: '<td >Cy Ganderton</td>', escape: false);
    $view->assertSee(value: '<tfoot>', escape: false);
    $view->assertSee(value: '<th >Total</th>', escape: false);
});

it(description: 'renders empty thead and tfoot when slots are provided', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-table>
            <x-slot:thead>
            </x-slot:thead>

            <x-table-row>
                <x-table-cell value="Cy Ganderton" />
            </x-table-row>

            <x-slot:tfoot>
            </x-slot:tfoot>
        </x-table>
    BLADE);

    $view->assertSee(value: '<thead><tr></tr></thead>', escape: false);
    $view->assertSee(value: '<tbody>', escape: false);
    $view->assertSee(value: '<td >Cy Ganderton</td>', escape: false);
    $view->assertSee(value: '</tbody>', escape: false);
    $view->assertSee(value: '<tfoot><tr></tr></tfoot>', escape: false);
});

it(description: 'can render table with custom attributes and classes', closure: function () {
    $view = $this->blade(template: '<x-table id="main-table" class="w-full"></x-table>');

    $view->assertSee(value: 'id="main-table"', escape: false);
    $view->assertSee(value: 'class="table w-full"', escape: false);
});

it(description: 'can render checkbox table example structure', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-table>
            <x-slot:thead>
                <x-table-head-cell>
                    <label>
                        <input type="checkbox" class="checkbox" name="select-all" aria-label="Select all rows" />
                    </label>
                </x-table-head-cell>
                <x-table-head-cell>Name</x-table-head-cell>
            </x-slot:thead>

            <x-table-row>
                <x-table-head-cell>
                    <label>
                        <input type="checkbox" class="checkbox" name="selected_rows[]" value="hart-hagerty" aria-label="Select Hart Hagerty" />
                    </label>
                </x-table-head-cell>
                <x-table-cell value="Hart Hagerty" />
            </x-table-row>
        </x-table>
    BLADE);

    $view->assertSee(value: '<thead>', escape: false);
    $view->assertSee(value: 'name="select-all"', escape: false);
    $view->assertSee(value: '<th >Name</th>', escape: false);
    $view->assertSee(value: '<tbody>', escape: false);
    $view->assertSee(value: 'name="selected_rows[]"', escape: false);
    $view->assertSee(value: '<td >Hart Hagerty</td>', escape: false);
});
