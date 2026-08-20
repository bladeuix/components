<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render aura around its content', closure: function () {
    $view = $this->blade(template: '<x-daisyui::aura><x-daisyui::button>Highlight</x-daisyui::button></x-daisyui::aura>');

    $view->assertSee(value: '<div class="aura"><button class="btn">Highlight</button></div>', escape: false);
});

it(description: 'can render aura style and size classes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::aura style="rainbow" size="lg">Highlight</x-daisyui::aura>');

    $view->assertSee(value: '<div class="aura aura-rainbow aura-lg">Highlight</div>', escape: false);
});

it(description: 'can render every supported aura style', closure: function (string $style) {
    $view = $this->blade(template: sprintf('<x-daisyui::aura style="%s">Highlight</x-daisyui::aura>', $style));

    $view->assertSee(value: sprintf('class="aura aura-%s"', $style), escape: false);
})->with(['dual', 'rainbow', 'holo', 'gold', 'silver', 'glow']);

it(description: 'can render every supported aura size', closure: function (string $size) {
    $view = $this->blade(template: sprintf('<x-daisyui::aura size="%s">Highlight</x-daisyui::aura>', $size));

    $view->assertSee(value: sprintf('class="aura aura-%s"', $size), escape: false);
})->with(['xs', 'sm', 'md', 'lg', 'xl']);

it(description: 'can merge custom classes and attributes', closure: function () {
    $view = $this->blade(template: '<x-daisyui::aura class="text-orange-600" id="featured">Highlight</x-daisyui::aura>');

    $view->assertSee(value: '<div class="aura text-orange-600" id="featured">Highlight</div>', escape: false);
});
