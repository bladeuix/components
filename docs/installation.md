# Installation

## Prerequisites

- **Laravel PHP:** Version ^11.0 or later
- **TailwindCSS:** Version ^4.0 or later
- **daisyUI:** Version ^5.0 or later

You need to have daisyUI (and therefore Tailwind CSS) installed in your Laravel project. If you don't have daisyUI, you can install it using your preferred package manager.

```bash
npm i -D daisyui@latest
```

## Package Installation

Install the BladeUIX package via Composer:

```bash
composer require bladeuix/components
```

## Configure Tailwind CSS

- Ensure that `daisyui` tailwindcss plugin in installed.
- `../../vendor/bladeuix/components/src/View/Components/*.php` is included in tailwindcss scan files.

```css
@import "tailwindcss";

/*Your other @source...*/

+ @source "../../vendor/bladeuix/components/src/View/Components/*.php";
+ @plugin "daisyui";

/*Your other css utilities...*/
```

## Configure Component Prefix (Optional)

By default, DaisyUI components are registered without a prefix, so you can use standard Laravel component tags such as `<x-button>`. This is convenient, but component names may collide with components registered by your application or other packages.

You may publish the configuration if you prefer to set the value in `config/blade-uix.php`:

```bash
php artisan vendor:publish --tag=blade-uix-config
```

Set `BLADEUIX_COMPONENTS_PREFIX=ui-` in your application `.env` file to use a prefix that matches your application. Your components will then use tags such as `<x-ui-button>` and `<x-ui-badge>`.

## Basic Usage

Once everything is installed and configured, you can use the components in your Blade templates:

```preview-html
<x-card title="Deployment" class="w-full max-w-sm bg-base-100 shadow-sm">
    <x-badge color="success" variant="soft">Ready</x-badge>
    <p>Production deployment is 75% complete.</p>
    <x-progress value="75" color="primary" class="w-full"/>

    <x-slot:actions>
        <x-button color="primary">Deploy</x-button>
    </x-slot:actions>
</x-card>
```

