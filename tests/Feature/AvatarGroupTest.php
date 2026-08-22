<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render an avatar group', closure: function () {
    $view = $this->blade(template: '<x-avatar-group class="-space-x-6">Avatars</x-avatar-group>');

    $view->assertSee(value: '<div class="avatar-group -space-x-6">Avatars</div>', escape: false);
});
