<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render a hover gallery around images', closure: function () {
    $view = $this->blade(template: '<x-daisyui::hover-gallery class="max-w-60"><img src="one.webp" alt="One" /><img src="two.webp" alt="Two" /></x-daisyui::hover-gallery>');

    $view->assertSee(value: '<div class="hover-gallery max-w-60"><img src="one.webp" alt="One" /><img src="two.webp" alt="Two" /></div>', escape: false);
});
