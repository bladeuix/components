# Link

Link adds the missing underline style to links.

```html
<x-daisyui::link href="#">
    Click me
</x-daisyui::link>
```

<div class="component-preview">
    <x-daisyui::link href="#">Click me</x-daisyui::link>
</div>


## Link colors

```html
<x-daisyui::link color="neutral">Neutral</x-daisyui::link>
<x-daisyui::link color="primary">Primary</x-daisyui::link>
<x-daisyui::link color="secondary">Secondary</x-daisyui::link>
<x-daisyui::link color="accent">Accent</x-daisyui::link>
<x-daisyui::link color="info">Info</x-daisyui::link>
<x-daisyui::link color="success">Success</x-daisyui::link>
<x-daisyui::link color="warning">Warning</x-daisyui::link>
```

```html
<x-daisyui::link color="error">Error</x-daisyui::link>
```

<div class="component-preview">
    <x-daisyui::link color="neutral">Neutral</x-daisyui::link>
    <x-daisyui::link color="primary">Primary</x-daisyui::link>
    <x-daisyui::link color="secondary">Secondary</x-daisyui::link>
    <x-daisyui::link color="accent">Accent</x-daisyui::link>
    <x-daisyui::link color="info">Info</x-daisyui::link>
    <x-daisyui::link color="success">Success</x-daisyui::link>
    <x-daisyui::link color="warning">Warning</x-daisyui::link>
    <x-daisyui::link color="error">Error</x-daisyui::link>
</div>


## Show underline only on hover

```html
<x-daisyui::link hover>
    I am a link but I only show underline on hover
</x-daisyui::link>
```

<div class="component-preview">
    <x-daisyui::link hover>I am a link but I only show underline on hover</x-daisyui::link>
</div>


## Link in text

```html
<p>
  Tailwind CSS resets the style of links by default.
  <br />
  Add "link" class to make it look like a
  <x-daisyui::link>normal link</x-daisyui::link>
  again.
</p>
```

## Responsive link

```html
<x-daisyui::link class="text-xs md:text-sm lg:text-md xl:text-lg">
    Responsive Link
</x-daisyui::link>
```

<div class="component-preview">
    <x-daisyui::link class="text-xs md:text-sm lg:text-md xl:text-lg">Responsive Link</x-daisyui::link>
</div>


## Advance

```html
<x-daisyui::link
    href="https://github.com/bladeuix/daisyui"
    target="_blank"
    rel="noopener noreferrer"
    title="Visit DaisyUI on GitHub"
    aria-label="DaisyUI GitHub Repository"
    onclick="console.log('Link clicked')"
>
    GitHub Repository
</x-daisyui::link>
```

<div class="component-preview">
    <x-daisyui::link
        href="https://github.com/bladeuix/daisyui"
        target="_blank"
        rel="noopener noreferrer"
        title="Visit DaisyUI on GitHub"
        aria-label="DaisyUI GitHub Repository"
        onclick="console.log('Link clicked')"
    >
        GitHub Repository
    </x-daisyui::link>
</div>
