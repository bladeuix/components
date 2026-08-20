<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render an avatar group', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar-group class="-space-x-6">Avatars</x-daisyui::avatar-group>');

    $view->assertSee(value: '<div class="avatar-group -space-x-6">Avatars</div>', escape: false);
});
