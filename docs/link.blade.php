# Link

Link adds the missing underline style to links.

```html
<x-link href="#">
    Click me
</x-link>
```

<div class="component-preview">
    <x-link href="#">Click me</x-link>
</div>


## Link colors

```html
<x-link color="neutral">Neutral</x-link>
<x-link color="primary">Primary</x-link>
<x-link color="secondary">Secondary</x-link>
<x-link color="accent">Accent</x-link>
<x-link color="info">Info</x-link>
<x-link color="success">Success</x-link>
<x-link color="warning">Warning</x-link>
```

```html
<x-link color="error">Error</x-link>
```

<div class="component-preview">
    <x-link color="neutral">Neutral</x-link>
    <x-link color="primary">Primary</x-link>
    <x-link color="secondary">Secondary</x-link>
    <x-link color="accent">Accent</x-link>
    <x-link color="info">Info</x-link>
    <x-link color="success">Success</x-link>
    <x-link color="warning">Warning</x-link>
    <x-link color="error">Error</x-link>
</div>


## Show underline only on hover

```html
<x-link hover>
    I am a link but I only show underline on hover
</x-link>
```

<div class="component-preview">
    <x-link hover>I am a link but I only show underline on hover</x-link>
</div>


## Link in text

```html
<p>
  Tailwind CSS resets the style of links by default.
  <br />
  Add "link" class to make it look like a
  <x-link>normal link</x-link>
  again.
</p>
```

## Responsive link

```html
<x-link class="text-xs md:text-sm lg:text-md xl:text-lg">
    Responsive Link
</x-link>
```

<div class="component-preview">
    <x-link class="text-xs md:text-sm lg:text-md xl:text-lg">Responsive Link</x-link>
</div>


## Advance

```html
<x-link
    href="https://github.com/bladeuix/components"
    target="_blank"
    rel="noopener noreferrer"
    title="Visit DaisyUI on GitHub"
    aria-label="DaisyUI GitHub Repository"
    onclick="console.log('Link clicked')"
>
    GitHub Repository
</x-link>
```

<div class="component-preview">
    <x-link
        href="https://github.com/bladeuix/components"
        target="_blank"
        rel="noopener noreferrer"
        title="Visit DaisyUI on GitHub"
        aria-label="DaisyUI GitHub Repository"
        onclick="console.log('Link clicked')"
    >
        GitHub Repository
    </x-link>
</div>
