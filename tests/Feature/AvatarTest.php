<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

it(description: 'can render an avatar image', closure: function () {
    $view = $this->blade(template: '<x-avatar image-src="https://example.com/avatar.webp" image-alt="Jane Doe" />');

    $view->assertSee(value: '<div class="avatar"><img src="https://example.com/avatar.webp" alt="Jane Doe"></div>', escape: false);
});

it(description: 'can render a rounded avatar', closure: function () {
    $view = $this->blade(template: '<x-avatar rounded image-src="https://example.com/avatar.webp" image-alt="Jane Doe" />');

    $view->assertSee(value: '<div class="avatar rounded-full"><img src="https://example.com/avatar.webp" alt="Jane Doe" class="rounded-full overflow-hidden"></div>', escape: false);
});

it(description: 'can render online and offline avatar statuses', closure: function (string $status) {
    $view = $this->blade(template: sprintf('<x-avatar presence="%s" image-src="https://example.com/avatar.webp" image-alt="Avatar" />', $status));

    $view->assertSee(value: sprintf('class="avatar avatar-%s"', $status), escape: false);
})->with(['online', 'offline']);

it(description: 'does not clip presence indicators on rounded avatars', closure: function () {
    $view = $this->blade(template: '<x-avatar rounded presence="online" image-src="https://example.com/avatar.webp" image-alt="Avatar" />');

    $view->assertSee(value: '<div class="avatar avatar-online rounded-full">', escape: false)
        ->assertDontSee(value: '<div class="avatar avatar-online rounded-full overflow-hidden">', escape: false);
});

it(description: 'can render an avatar abbreviation placeholder', closure: function () {
    $view = $this->blade(template: '<x-avatar abbreviation="AI" rounded class="w-16 bg-neutral" />');

    $view->assertSee(value: '<div class="avatar avatar-placeholder rounded-full w-16 bg-neutral"><div class="rounded-full overflow-hidden"><span>AI</span></div></div>', escape: false);
});

it(description: 'uses an abbreviation instead of an image', closure: function () {
    $view = $this->blade(template: '<x-avatar abbreviation="AI" image-src="https://example.com/avatar.webp" image-alt="Avatar" />');

    $view->assertSee(value: '<span>AI</span>', escape: false)
        ->assertDontSee(value: '<img', escape: false);
});

it(description: 'uses zero as an abbreviation placeholder', closure: function () {
    $view = $this->blade(template: '<x-avatar abbreviation="0" />');

    $view->assertSee(value: '<div class="avatar avatar-placeholder"><div><span>0</span></div></div>', escape: false)
        ->assertDontSee(value: '<img', escape: false);
});

it(description: 'merges component attributes onto the avatar', closure: function () {
    $view = $this->blade(template: '<x-avatar image-src="https://example.com/avatar.webp" image-alt="Jane Doe" loading="lazy" class="w-24 rounded-full" />');

    $view->assertSee(value: '<div class="avatar w-24 rounded-full" loading="lazy"><img src="https://example.com/avatar.webp" alt="Jane Doe"></div>', escape: false);
});
