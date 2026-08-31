<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render toast with default classes', closure: function () {
    $view = $this->blade(template: '<x-toast><div class="alert">Content</div></x-toast>');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="toast">',
        '<div class="alert">Content</div>',
        '</div>',
    ]);
});

it(description: 'can render toast with start horizontal alignment', closure: function () {
    $view = $this->blade(template: '<x-toast horizontal="start"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-start">', escape: false);
});

it(description: 'can render toast with center horizontal alignment', closure: function () {
    $view = $this->blade(template: '<x-toast horizontal="center"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-center">', escape: false);
});

it(description: 'can render toast with end horizontal alignment', closure: function () {
    $view = $this->blade(template: '<x-toast horizontal="end"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-end">', escape: false);
});

it(description: 'can render toast with top vertical alignment', closure: function () {
    $view = $this->blade(template: '<x-toast vertical="top"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-top">', escape: false);
});

it(description: 'can render toast with middle vertical alignment', closure: function () {
    $view = $this->blade(template: '<x-toast vertical="middle"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-middle">', escape: false);
});

it(description: 'can render toast with bottom vertical alignment', closure: function () {
    $view = $this->blade(template: '<x-toast vertical="bottom"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-bottom">', escape: false);
});

it(description: 'can render toast with combined alignments', closure: function () {
    $view = $this->blade(template: '<x-toast horizontal="start" vertical="top"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast toast-start toast-top">', escape: false);
});

it(description: 'can render toast with custom classes', closure: function () {
    $view = $this->blade(template: '<x-toast class="my-custom-toast"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: '<div class="toast my-custom-toast">', escape: false);
});

it(description: 'can render toast with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-toast id="toast-id" aria-live="polite"><div class="alert">Content</div></x-toast>');

    $view->assertSee(value: 'id="toast-id"', escape: false);
    $view->assertSee(value: 'aria-live="polite"', escape: false);
    $view->assertSee(value: 'class="toast"', escape: false);
});

it(description: 'can render toast with multiple alerts', closure: function () {
    $view = $this->blade(template: '<x-toast><div class="alert alert-info">Info</div><div class="alert alert-success">Success</div></x-toast>');

    $view->assertSee(value: '<div class="alert alert-info">Info</div>', escape: false);
    $view->assertSee(value: '<div class="alert alert-success">Success</div>', escape: false);
});

it(description: 'can render empty toast', closure: function () {
    $view = $this->blade(template: '<x-toast></x-toast>');

    $view->assertSee(value: '<div class="toast"></div>', escape: false);
});
