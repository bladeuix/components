<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render tabs with style, placement, and size classes', closure: function () {
    $view = $this->blade(template: '<x-tabs style="lift" placement="bottom" size="lg">Tabs</x-tabs>');

    $view->assertSee(value: '<div role="tablist" class="tabs tabs-lift tabs-bottom tabs-lg">Tabs</div>', escape: false);
});

it(description: 'ignores unsupported tabs modifiers', closure: function () {
    $view = $this->blade(template: '<x-tabs style="invalid" placement="invalid" size="invalid" />');

    $view->assertSee(value: '<div role="tablist" class="tabs"></div>', escape: false);
});

it(description: 'can render a radio tab label with an optional icon and content', closure: function () {
    $view = $this->blade(
        template: '<x-tabs><x-tab name="profile" label="Profile" active :icon="$icon" class="border-base-300">Profile content</x-tab></x-tabs>',
        data: ['icon' => new \Illuminate\Support\HtmlString('<svg class="size-4"></svg>')],
    );

    $view->assertSee(value: '<label class="tab">', escape: false)
        ->assertDontSee(value: 'tab-active', escape: false)
        ->assertSee(value: '<input type="radio" name="profile" autocomplete="off" checked="checked" />', escape: false)
        ->assertSee(value: '<svg class="size-4"></svg>Profile</label>', escape: false)
        ->assertSee(value: '<div class="tab-content border-base-300">Profile content</div>', escape: false);
});

it(description: 'can render an active disabled radio tab', closure: function () {
    $view = $this->blade(template: '<x-tab name="profile" label="Profile" active disabled />');

    $view->assertSee(value: '<label class="tab tab-disabled">', escape: false)
        ->assertSee(value: '<input type="radio" name="profile" autocomplete="off" checked="checked" disabled="disabled" />Profile</label>', escape: false);
});

it(description: 'can render a link tab with its content', closure: function () {
    $view = $this->blade(
        template: '<x-tabs><x-tab name="settings" href="/settings" label="Settings" active :icon="$icon" class="border-base-300">Settings content</x-tab></x-tabs>',
        data: ['icon' => new \Illuminate\Support\HtmlString('<svg class="size-4"></svg>')],
    );

    $view->assertSee(value: '<a href="/settings" role="tab" class="tab tab-active"><svg class="size-4"></svg>Settings</a>', escape: false)
        ->assertSee(value: '<div class="tab-content border-base-300">Settings content</div>', escape: false);
});

it(description: 'renders a disabled link tab without an href', closure: function () {
    $view = $this->blade(template: '<x-tab name="settings" href="/settings" label="Settings" disabled />');

    $view->assertSee(value: '<a role="tab" aria-disabled="true" class="tab tab-disabled">Settings</a>', escape: false)
        ->assertDontSee(value: 'href="/settings"', escape: false);
});

it(description: 'does not allow radio tab attributes to override its fixed attributes', closure: function () {
    $view = $this->blade(template: '<x-tab name="profile" label="Profile" type="checkbox" autocomplete="on" aria-label="Overridden">Profile</x-tab>');

    $view->assertSee(value: '<label class="tab">', escape: false)
        ->assertSee(value: '<input type="radio" name="profile" autocomplete="off" />Profile</label>', escape: false);
});
