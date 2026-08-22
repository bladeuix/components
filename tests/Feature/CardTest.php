<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render a card body around its content', closure: function () {
    $view = $this->blade(template: '<x-card>Content</x-card>');

    $view->assertSee(value: '<div class="card">', escape: false);
    $view->assertSee(value: '<div class="card-body">', escape: false);
    $view->assertSee(value: 'Content', escape: false);
});

it(description: 'can render card title and image attributes with an actions slot', closure: function () {
    $view = $this->blade(template: <<<'BLADE'
        <x-card title="Card title" image-src="shoe.webp" image-alt="Shoes">
            Card content
            <x-slot:actions><x-button color="primary">Buy now</x-button></x-slot:actions>
        </x-card>
    BLADE);

    $view->assertSeeHtmlInOrder([
        '<figure><img src="shoe.webp" alt="Shoes"></figure>',
        '<div class="card-body">',
        '<h2 class="card-title">Card title</h2>',
        'Card content',
        '<div class="card-actions"><button class="btn btn-primary">Buy now</button></div>',
    ]);
});

it(description: 'can render card attributes', closure: function () {
    $view = $this->blade(template: '<x-card size="lg" style="border" image-full side>Content</x-card>');

    $view->assertSee(value: 'class="card card-lg card-border image-full card-side"', escape: false);
});

it(description: 'can render a bottom image after the card body', closure: function () {
    $view = $this->blade(template: '<x-card image-src="shoe.webp" image-alt="Shoes" image-bottom>Content</x-card>');

    $view->assertSeeHtmlInOrder([
        '<div class="card">',
        '<div class="card-body">',
        'Content',
        '<figure><img src="shoe.webp" alt="Shoes"></figure>',
    ]);
});

it(description: 'can render a dashed card', closure: function () {
    $view = $this->blade(template: '<x-card style="dash">Content</x-card>');

    $view->assertSee(value: 'class="card card-dash"', escape: false);
});

it(description: 'can merge card attributes', closure: function () {
    $view = $this->blade(template: '<x-card class="shadow-xl" id="product">Content</x-card>');

    $view->assertSee(value: '<div class="card shadow-xl" id="product">', escape: false);
});
