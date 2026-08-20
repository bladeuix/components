<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render an avatar image', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar src="https://example.com/avatar.webp" alt="Jane Doe" />');

    $view->assertSee(value: '<div class="avatar"><img src="https://example.com/avatar.webp" alt="Jane Doe"></div>', escape: false);
});

it(description: 'can render a rounded avatar', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar rounded src="https://example.com/avatar.webp" alt="Jane Doe" />');

    $view->assertSee(value: '<div class="avatar rounded-full"><img src="https://example.com/avatar.webp" alt="Jane Doe"></div>', escape: false);
});

it(description: 'can render online and offline avatar statuses', closure: function (string $status) {
    $view = $this->blade(template: sprintf('<x-daisyui::avatar presence="%s" src="https://example.com/avatar.webp" alt="Avatar" />', $status));

    $view->assertSee(value: sprintf('class="avatar avatar-%s"', $status), escape: false);
})->with(['online', 'offline']);

it(description: 'can render an avatar abbreviation placeholder', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar abbreviation="AI" class="w-16 rounded-full bg-neutral" />');

    $view->assertSee(value: '<div class="avatar avatar-placeholder w-16 rounded-full bg-neutral"><div><span>AI</span></div></div>', escape: false);
});

it(description: 'uses an abbreviation instead of an image', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar abbreviation="AI" src="https://example.com/avatar.webp" alt="Avatar" />');

    $view->assertSee(value: '<span>AI</span>', escape: false)
        ->assertDontSee(value: '<img', escape: false);
});

it(description: 'uses zero as an abbreviation placeholder', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar abbreviation="0" />');

    $view->assertSee(value: '<div class="avatar avatar-placeholder"><div><span>0</span></div></div>', escape: false)
        ->assertDontSee(value: '<img', escape: false);
});

it(description: 'merges component attributes onto the avatar', closure: function () {
    $view = $this->blade(template: '<x-daisyui::avatar src="https://example.com/avatar.webp" alt="Jane Doe" loading="lazy" class="w-24 rounded-full" />');

    $view->assertSee(value: '<div class="avatar w-24 rounded-full" loading="lazy"><img src="https://example.com/avatar.webp" alt="Jane Doe"></div>', escape: false);
});
