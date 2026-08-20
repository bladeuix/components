# Card

Cards group related content and actions in a readable container. The default slot is the card body; use the `title`, `image-src`, and `image-alt` attributes with the optional `actions` slot.

```html
<x-daisyui::card
    title="Card title"
    image-src="..."
    image-alt="Shoes"
    class="w-96 bg-base-100 shadow-sm"
>
    <p>A card has an image, body, title, and actions.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card
        title="Card title"
        image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
        image-alt="Shoes"
        class="w-96 bg-base-100 shadow-sm"
    >
        <p>A card has an image, body, title, and actions.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Styles

Use `size` with `xs`, `sm`, `md`, `lg`, or `xl`. Set `style` to `border` or `dash` for the matching DaisyUI Card style.

```html
<x-daisyui::card size="sm" style="border" title="Small bordered card">Card content</x-daisyui::card>
<x-daisyui::card size="lg" style="dash" title="Large dashed card">Card content</x-daisyui::card>
```

<div class="component-preview grid gap-4">
    <x-daisyui::card size="sm" style="border" title="Small bordered card" class="bg-base-100">Card content</x-daisyui::card>
    <x-daisyui::card size="lg" style="dash" title="Large dashed card" class="bg-base-100">Card content</x-daisyui::card>
</div>

## Image layouts

Use `image-full` for a background image or `side` to place the image beside the body.

```html
<x-daisyui::card image-full image-src="..." image-alt="Product" title="Image overlay">
    <p>Content appears over the image.</p>
</x-daisyui::card>

<x-daisyui::card side image-src="..." image-alt="Movie" title="Image on the side">
    <p>Content appears beside the image.</p>
</x-daisyui::card>
```

<div class="component-preview grid gap-6">
    <x-daisyui::card image-full image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" image-alt="Product" title="Image overlay" class="w-96 bg-base-100 shadow-sm">
        <p>Content appears over the image.</p>
    </x-daisyui::card>
    <x-daisyui::card side image-src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" image-alt="Movie" title="Image on the side" class="bg-base-100 shadow-sm">
        <p>Content appears beside the image.</p>
    </x-daisyui::card>
</div>

## Pricing card

```html
<x-daisyui::card title="Premium" class="w-96 bg-base-100 shadow-sm">
    <p class="text-xl">$29/mo</p>
    <ul><li>High-resolution image generation</li><li>Customizable templates</li></ul>
    <x-slot:actions>
        <x-daisyui::button color="primary" class="btn-block">Subscribe</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Premium" class="w-96 bg-base-100 shadow-sm">
        <p class="text-xl">$29/mo</p>
        <ul><li>High-resolution image generation</li><li>Customizable templates</li></ul>
        <x-slot:actions>
            <x-daisyui::button color="primary" class="btn-block">Subscribe</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card sizes

```html
<x-daisyui::card size="xs" style="border" title="Extra small">
    <p>A compact card with a title, description, and action.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>

<x-daisyui::card size="sm" style="border" title="Small">
    <p>A compact card with a title, description, and action.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>

<x-daisyui::card size="md" style="border" title="Medium">
    <p>A compact card with a title, description, and action.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>

<x-daisyui::card size="lg" style="border" title="Large">
    <p>A compact card with a title, description, and action.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>

<x-daisyui::card size="xl" style="border" title="Extra large">
    <p>A compact card with a title, description, and action.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview grid gap-4">
    <x-daisyui::card size="xs" style="border" title="Extra small" class="bg-base-100">
        <p>A compact card with a title, description, and action.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
    <x-daisyui::card size="sm" style="border" title="Small" class="bg-base-100">
        <p>A compact card with a title, description, and action.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
    <x-daisyui::card size="md" style="border" title="Medium" class="bg-base-100">
        <p>A compact card with a title, description, and action.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
    <x-daisyui::card size="lg" style="border" title="Large" class="bg-base-100">
        <p>A compact card with a title, description, and action.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
    <x-daisyui::card size="xl" style="border" title="Extra large" class="bg-base-100">
        <p>A compact card with a title, description, and action.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with badge

```html
<x-daisyui::card title="Card title" image-src="..." image-alt="Shoes" class="w-96 bg-base-100 shadow-sm">
    <p>A card with a badge in its content.</p>
    <x-slot:actions>
        <span class="badge badge-outline">Fashion</span><span class="badge badge-outline">Products</span>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Card title" image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" image-alt="Shoes" class="w-96 bg-base-100 shadow-sm">
        <p>A card with a badge in its content.</p>
        <x-slot:actions>
            <span class="badge badge-outline">Fashion</span><span class="badge badge-outline">Products</span>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with bottom image

Place the image after the body with `image-bottom`.

```html
<x-daisyui::card title="Card title" image-src="..." image-alt="Shoes" image-bottom>
    <p>The image appears below this content.</p>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Card title" image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" image-alt="Shoes" image-bottom class="w-96 bg-base-100 shadow-sm">
        <p>The image appears below this content.</p>
    </x-daisyui::card>
</div>

## Card with image on side

```html
<x-daisyui::card side title="New movie is released!" image-src="..." image-alt="Movie" class="bg-base-100 shadow-sm">
    <p>Click the button to watch on Jetflix app.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Watch</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card side title="New movie is released!" image-src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" image-alt="Movie" class="bg-base-100 shadow-sm">
        <p>Click the button to watch on Jetflix app.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Watch</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with image overlay

```html
<x-daisyui::card image-full title="Card title" image-src="..." image-alt="Shoes">
    <p>Content appears over the image.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card image-full title="Card title" image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" image-alt="Shoes" class="w-96 bg-base-100 shadow-sm">
        <p>Content appears over the image.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Centered card

```html
<x-daisyui::card title="Card title" image-src="..." image-alt="Shoes" class="w-96 bg-base-100 shadow-sm text-center">
    <p>A card with centered content.</p>
    <x-slot:actions>
        <div class="w-full text-center">
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </div>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Card title" image-src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" image-alt="Shoes" class="w-96 bg-base-100 shadow-sm text-center">
        <p>A card with centered content.</p>
        <x-slot:actions>
            <div class="w-full text-center">
                <x-daisyui::button color="primary">Buy now</x-daisyui::button>
            </div>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with no image

```html
<x-daisyui::card title="Card title" class="w-96 bg-base-100 shadow-sm">
    <p>A card does not require an image.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Card title" class="w-96 bg-base-100 shadow-sm">
        <p>A card does not require an image.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with custom color

```html
<x-daisyui::card title="Card title" class="w-96 bg-primary text-primary-content">
    <p>Cards support DaisyUI color utility classes.</p>
    <x-slot:actions>
        <x-daisyui::button>Buy now</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Card title" class="w-96 bg-primary text-primary-content">
        <p>Cards support DaisyUI color utility classes.</p>
        <x-slot:actions>
            <x-daisyui::button>Buy now</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Centered card with neutral color

```html
<x-daisyui::card title="Cookies!" class="w-96 bg-neutral text-neutral-content">
    <p>We are using cookies for no reason.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Accept</x-daisyui::button>
        <x-daisyui::button variant="ghost">Deny</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="Cookies!" class="w-96 bg-neutral text-neutral-content">
        <p>We are using cookies for no reason.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Accept</x-daisyui::button>
            <x-daisyui::button variant="ghost">Deny</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>

## Card with action on top

```html
<x-daisyui::card class="w-96 bg-base-100 shadow-sm">
    <div class="flex justify-end">
        <x-daisyui::button size="sm" shape="square">×</x-daisyui::button>
    </div>
    <p>We are using cookies for no reason.</p>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card class="w-96 bg-base-100 shadow-sm">
        <div class="flex justify-end">
            <x-daisyui::button size="sm" shape="square">×</x-daisyui::button>
        </div>
        <p>We are using cookies for no reason.</p>
    </x-daisyui::card>
</div>

## Responsive card

Use responsive utility classes with `side` to make the card horizontal only at larger breakpoints.

```html
<x-daisyui::card title="New album is released!" image-src="..." image-alt="Album" class="lg:card-side bg-base-100 shadow-sm">
    <p>Click the button to listen on Spotiwhy app.</p>
    <x-slot:actions>
        <x-daisyui::button color="primary">Listen</x-daisyui::button>
    </x-slot:actions>
</x-daisyui::card>
```

<div class="component-preview">
    <x-daisyui::card title="New album is released!" image-src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp" image-alt="Album" class="lg:card-side bg-base-100 shadow-sm">
        <p>Click the button to listen on Spotiwhy app.</p>
        <x-slot:actions>
            <x-daisyui::button color="primary">Listen</x-daisyui::button>
        </x-slot:actions>
    </x-daisyui::card>
</div>