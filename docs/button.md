# Button

Buttons allow the user to take actions or make choices.

```preview-tabs
:::code Vanilla html
<x-button>Default</x-button>
:::

:::code Alpine.js html
<x-button @click="alert('Button clicked!')">Default</x-button>
:::

:::code Livewire blade
<x-button wire:click="download">Default</x-button>
:::

:::code HTMX html
<x-button
    hx-post="/clicked"
    hx-trigger="click"
    hx-target="#parent-div"
    hx-swap="outerHTML"
>
    Default
</x-button>
:::

:::preview
<x-button>Default</x-button>
:::
```

## Button sizes

```preview-html
<x-button size="xs">Extra Small </x-button>
<x-button size="sm">Small</x-button>
<x-button size="md">Medium</x-button>
<x-button size="lg">Large</x-button>
<x-button size="xl">Extra large</x-button>
```

## Button states

```preview-html
<x-button>Normal</x-button>
<x-button state="active">Active</x-button>
<x-button state="disabled">Disabled</x-button>
```

## Button shapes

```preview-html
<x-button shape="square">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
</x-button>
<x-button shape="circle">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
</x-button>
<x-button shape="wide">Wide</x-button>
<x-button shape="block">Block</x-button>
```

## Button colors

```preview-html
<x-button color="neutral">Neutral</x-button>
<x-button color="primary">Primary</x-button>
<x-button color="secondary">Secondary</x-button>
<x-button color="accent">Accent</x-button>
<x-button color="info">Info</x-button>
<x-button color="success">Success</x-button>
<x-button color="warning">Warning</x-button>
<x-button color="error">Error</x-button>
```

## Button variants

```preview-html
<x-button variant="ghost">Ghost</x-button>
<x-button variant="link">Link</x-button>
<x-button variant="soft" color="primary">Soft</x-button>
<x-button variant="outline" color="secondary">Outline</x-button>
<x-button variant="dashed" color="accent">Dashed</x-button>
```

## Prefix and Suffix

```preview-html
<x-button>
    <x-loading />
    With Prefix
</x-button>
<x-button>
    With Suffix
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-[1.2em]"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
</x-button>
<x-button class="bg-white text-black border-[#e5e5e5]">
    <svg aria-label="Google logo" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g><path d="m0 0H512V512H0" fill="#fff"></path><path fill="#34a853" d="M153 292c30 82 118 95 171 60h62v48A192 192 0 0190 341"></path><path fill="#4285f4" d="m386 400a140 175 0 0053-179H260v74h102q-7 37-38 57"></path><path fill="#fbbc02" d="m90 341a208 200 0 010-171l63 49q-12 37 0 73"></path><path fill="#ea4335" d="m153 219c22-69 116-109 179-50l55-54c-78-75-230-72-297 55"></path></g></svg>
    Login with Google
</x-button>
```

## Responsive button

```preview-html
<x-button class="lg:btn-xl xl:btn-primary xl:btn-block!">
    Responsive Button
</x-button>
```

---

## Reference

### Button Attributes

| Name      | Default | Description                                                                                              |
|-----------|---------|----------------------------------------------------------------------------------------------------------|
| `size`    | `null`  | The button size: `xs`, `sm`, `md`, `lg`, or `xl`.                                                        |
| `color`   | `null`  | The button color: `neutral`, `primary`, `secondary`, `accent`, `info`, `success`, `warning`, or `error`. |
| `state`   | `null`  | The button state: `active` or `disabled`.                                                                |
| `shape`   | `null`  | The button shape: `square`, `circle`, `wide`, or `block`.                                                |
| `variant` | `null`  | The button variant: `ghost`, `link`, `soft`, `outline`, or `dashed`.                                     |

### Button Slot

| Name    | Default | Description                |
|---------|---------|----------------------------|
| Default | Empty   | The button label content.  |
