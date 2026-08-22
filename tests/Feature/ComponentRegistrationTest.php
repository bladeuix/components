<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests\Feature;

use BladeUix\DaisyUi\Providers\BladeUixServiceProvider;

it(description: 'can render components without a prefix by default', closure: function () {
    $view = $this->blade(template: '<x-badge>Badge</x-badge>');

    $view->assertSee(value: '<span class="badge">Badge</span>', escape: false);
});

it(description: 'can render components with a configured prefix', closure: function () {
    config()->set(key: 'blade-uix.prefix', value: 'ui-');

    (new BladeUixServiceProvider($this->app))->boot();

    $view = $this->blade(template: '<x-ui-badge>Badge</x-badge>');

    $view->assertSee(value: '<span class="badge">Badge</span>', escape: false);
});
