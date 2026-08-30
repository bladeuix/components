<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render skeleton with default classes', closure: function () {
    $view = $this->blade(template: '<x-skeleton />');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="skeleton"></div>',
    ]);
});

it(description: 'can render skeleton with text prop', closure: function () {
    $view = $this->blade(template: '<x-skeleton text />');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="skeleton skeleton-text"></div>',
    ]);
});

it(description: 'can render skeleton with text prop false', closure: function () {
    $view = $this->blade(template: '<x-skeleton :text="false" />');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="skeleton"></div>',
    ]);
});

it(description: 'can render skeleton with custom width', closure: function () {
    $view = $this->blade(template: '<x-skeleton style="width: 200px;" />');

    $view->assertSee(value: 'style="width: 200px;"', escape: false);
    $view->assertSee(value: 'class="skeleton"', escape: false);
});

it(description: 'can render skeleton with custom height', closure: function () {
    $view = $this->blade(template: '<x-skeleton style="height: 100px;" />');

    $view->assertSee(value: 'style="height: 100px;"', escape: false);
    $view->assertSee(value: 'class="skeleton"', escape: false);
});

it(description: 'can render skeleton with custom classes', closure: function () {
    $view = $this->blade(template: '<x-skeleton class="my-custom-skeleton" />');

    $view->assertSee(value: 'class="skeleton my-custom-skeleton"', escape: false);
});

it(description: 'can render skeleton with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-skeleton id="skeleton-id" aria-label="Loading" />');

    $view->assertSee(value: 'id="skeleton-id"', escape: false);
    $view->assertSee(value: 'aria-label="Loading"', escape: false);
    $view->assertSee(value: 'class="skeleton"', escape: false);
});

it(description: 'can render skeleton with circular shape', closure: function () {
    $view = $this->blade(template: '<x-skeleton class="rounded-full" />');

    $view->assertSee(value: 'class="skeleton rounded-full"', escape: false);
});

it(description: 'can render skeleton with rectangular shape', closure: function () {
    $view = $this->blade(template: '<x-skeleton class="rounded" />');

    $view->assertSee(value: 'class="skeleton rounded"', escape: false);
});

it(description: 'can render skeleton with complex layout', closure: function () {
    $view = $this->blade(template: <<<'blade'
        <div class="flex items-center gap-4">
            <div class="skeleton size-12 shrink-0 rounded-full"></div>
            <div class="flex flex-col gap-2 w-full">
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-2/3"></div>
            </div>
        </div>
    blade);

    $view->assertSee(value: 'skeleton size-12 shrink-0 rounded-full', escape: false);
    $view->assertSee(value: 'skeleton h-4 w-full', escape: false);
    $view->assertSee(value: 'skeleton h-4 w-2/3', escape: false);
});
