<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render table row with custom classes and attributes', closure: function () {
    $view = $this->blade(template: '<x-table-row class="bg-base-200 hover:bg-base-300" data-row="1"></x-table-row>');

    $view->assertSee(value: '<tr', escape: false);
    $view->assertSee(value: 'data-row="1"', escape: false);
    $view->assertSee(value: 'class="bg-base-200 hover:bg-base-300"', escape: false);
});
