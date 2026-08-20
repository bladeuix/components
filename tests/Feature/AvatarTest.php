<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render an avatar around its content', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar><div class="w-24 rounded">Avatar</div></x-daisyui::avatar>');

    $view->assertSee(value: '<div class="avatar"><div class="w-24 rounded">Avatar</div></div>', escape: false);
});

it(description: 'can render an avatar group', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar group class="-space-x-6">Avatars</x-daisyui::avatar>');

    $view->assertSee(value: '<div class="avatar-group -space-x-6">Avatars</div>', escape: false);
});

it(description: 'can render online and offline avatar statuses', closure: function (string $status) {
    $view = $this->blade(template: sprintf('<x-daisyui::avatar status="%s">Avatar</x-daisyui::avatar>', $status));

    $view->assertSee(value: sprintf('class="avatar avatar-%s"', $status), escape: false);
})->with(['online', 'offline']);

it(description: 'can render an avatar placeholder', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar placeholder>AI</x-daisyui::avatar>');

    $view->assertSee(value: '<div class="avatar avatar-placeholder">AI</div>', escape: false);
});

it(description: 'ignores unsupported avatar statuses', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar status="away">Avatar</x-daisyui::avatar>');

    $view->assertSee(value: '<div class="avatar">Avatar</div>', escape: false);
});
