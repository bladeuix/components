<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render carousel items with default direction and modifier', closure: function () {
    $view = $this->blade(template: '<x-daisyui::carousel><x-daisyui::carousel-item>One</x-daisyui::carousel-item></x-daisyui::carousel>');

    $view->assertSee(value: '<div class="carousel carousel-start carousel-horizontal"><div class="carousel-item">One</div></div>', escape: false);
});

it(description: 'can render carousel item images', closure: function () {
    $view = $this->blade(template: '<x-daisyui::carousel-item image-src="burger.webp" image-alt="Burger" />');

    $view->assertSee(value: '<div class="carousel-item"><img src="burger.webp" alt="Burger" /></div>', escape: false);
});

it(description: 'can render carousel item images with slot content', closure: function () {
    $view = $this->blade(template: '<x-daisyui::carousel-item image-src="burger.webp" image-alt="Burger"><a href="#next">Next</a></x-daisyui::carousel-item>');

    $view->assertSee(value: '<div class="carousel-item"><img src="burger.webp" alt="Burger" /><a href="#next">Next</a></div>', escape: false);
});

it(description: 'can render carousel direction and modifier attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::carousel direction="vertical" modifier="center">Content</x-daisyui::carousel>');

    $view->assertSee(value: 'class="carousel carousel-center carousel-vertical"', escape: false);
});

it(description: 'ignores invalid carousel direction and modifier attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::carousel direction="diagonal" modifier="between">Content</x-daisyui::carousel>');

    $view->assertSee(value: 'class="carousel carousel-start carousel-horizontal"', escape: false);
});
