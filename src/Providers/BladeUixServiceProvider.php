<?php

declare(strict_types=1);

namespace BladeUix\Providers;

use BladeUix\View\Components;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeUixServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            path: __DIR__.'/../../config/blade-uix.php',
            key: 'blade-uix'
        );
    }

    public function boot(): void
    {
        $this->loadJsonTranslationsFrom(path: __DIR__.'/../../lang');

        $this->publishes(paths: [
            __DIR__.'/../../config/blade-uix.php' => config_path(path: 'blade-uix.php'),
        ], groups: 'blade-uix-config');

        $this->publishes(paths: [
            __DIR__.'/../../lang' => lang_path(path: 'vendor/blade-uix'),
        ], groups: 'blade-uix-translations');

        $prefix = config(key: 'blade-uix.prefix');

        Blade::component(class: $prefix.'accordion', alias: Components\Accordion::class);
        Blade::component(class: $prefix.'aura', alias: Components\Aura::class);
        Blade::component(class: $prefix.'avatar', alias: Components\Avatar::class);
        Blade::component(class: $prefix.'avatar-group', alias: Components\AvatarGroup::class);
        Blade::component(class: $prefix.'badge', alias: Components\Badge::class);
        Blade::component(class: $prefix.'breadcrumb-link', alias: Components\BreadcrumbLink::class);
        Blade::component(class: $prefix.'breadcrumbs', alias: Components\Breadcrumbs::class);
        Blade::component(class: $prefix.'button', alias: Components\Button::class);
        Blade::component(class: $prefix.'card', alias: Components\Card::class);
        Blade::component(class: $prefix.'carousel', alias: Components\Carousel::class);
        Blade::component(class: $prefix.'carousel-item', alias: Components\CarouselItem::class);
        Blade::component(class: $prefix.'checkbox', alias: Components\Checkbox::class);
        Blade::component(class: $prefix.'divider', alias: Components\Divider::class);
        Blade::component(class: $prefix.'kbd', alias: Components\Kbd::class);
        Blade::component(class: $prefix.'link', alias: Components\Link::class);
        Blade::component(class: $prefix.'loading', alias: Components\Loading::class);
        Blade::component(class: $prefix.'progress', alias: Components\Progress::class);
        Blade::component(class: $prefix.'radial-progress', alias: Components\RadialProgress::class);
        Blade::component(class: $prefix.'radio', alias: Components\Radio::class);
        Blade::component(class: $prefix.'skeleton', alias: Components\Skeleton::class);
        Blade::component(class: $prefix.'status', alias: Components\Status::class);
        Blade::component(class: $prefix.'tab', alias: Components\Tab::class);
        Blade::component(class: $prefix.'table', alias: Components\Table::class);
        Blade::component(class: $prefix.'table-cell', alias: Components\TableCell::class);
        Blade::component(class: $prefix.'table-head-cell', alias: Components\TableHeadCell::class);
        Blade::component(class: $prefix.'table-row', alias: Components\TableRow::class);
        Blade::component(class: $prefix.'tabs', alias: Components\Tabs::class);
    }
}
