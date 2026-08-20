# Button

Buttons allow the user to take actions or make choices.

```html
<x-daisyui::button>Default</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button>Default</x-daisyui::button>
</div>


## Button sizes

```html
<x-daisyui::button size="xs">Extra Small</x-daisyui::button>
<x-daisyui::button size="sm">Small</x-daisyui::button>
<x-daisyui::button size="md">Medium</x-daisyui::button>
```

```html
<x-daisyui::button size="lg">Large</x-daisyui::button>
```

```html
<x-daisyui::button size="xl">Extra large</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button size="xs">Extra Small </x-daisyui::button>
    <x-daisyui::button size="sm">Small</x-daisyui::button>
    <x-daisyui::button size="md">Medium</x-daisyui::button>
    <x-daisyui::button size="lg">Large</x-daisyui::button>
    <x-daisyui::button size="xl">Extra large</x-daisyui::button>
</div>


## Button states

```html
<x-daisyui::button>Normal</x-daisyui::button>
<x-daisyui::button state="active">Active</x-daisyui::button>
```

```html
<x-daisyui::button state="disabled">Disabled</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button>Normal</x-daisyui::button>
    <x-daisyui::button state="active">Active</x-daisyui::button>
    <x-daisyui::button state="disabled">Disabled</x-daisyui::button>
</div>


## Button shapes

```html
<x-daisyui::button shape="square">Square</x-daisyui::button>
<x-daisyui::button shape="circle">Circle</x-daisyui::button>
<x-daisyui::button shape="wide">Wide</x-daisyui::button>
```

```html
<x-daisyui::button shape="block">Block</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button shape="square">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </x-daisyui::button>
    <x-daisyui::button shape="circle">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </x-daisyui::button>
    <x-daisyui::button shape="wide">Wide</x-daisyui::button>
    <x-daisyui::button shape="block">Block</x-daisyui::button>
</div>



## Button colors

```html
<x-daisyui::button color="neutral">Neutral</x-daisyui::button>
<x-daisyui::button color="primary">Primary</x-daisyui::button>
<x-daisyui::button color="secondary">Secondary</x-daisyui::button>
<x-daisyui::button color="accent">Accent</x-daisyui::button>
<x-daisyui::button color="info">Info</x-daisyui::button>
<x-daisyui::button color="success">Success</x-daisyui::button>
<x-daisyui::button color="warning">Warning</x-daisyui::button>
```

```html
<x-daisyui::button color="error">Error</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button color="neutral">Neutral</x-daisyui::button>
    <x-daisyui::button color="primary">Primary</x-daisyui::button>
    <x-daisyui::button color="secondary">Secondary</x-daisyui::button>
    <x-daisyui::button color="accent">Accent</x-daisyui::button>
    <x-daisyui::button color="info">Info</x-daisyui::button>
    <x-daisyui::button color="success">Success</x-daisyui::button>
    <x-daisyui::button color="warning">Warning</x-daisyui::button>
    <x-daisyui::button color="error">Error</x-daisyui::button>
</div>


## Button variants

```html
<x-daisyui::button variant="ghost">Ghost</x-daisyui::button>
<x-daisyui::button variant="link">Link</x-daisyui::button>
<x-daisyui::button variant="soft" color="primary">Soft</x-daisyui::button>
<x-daisyui::button variant="outline" color="secondary">Outline</x-daisyui::button>
```

```html
<x-daisyui::button variant="dashed" color="accent">Dashed</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button variant="ghost">Ghost</x-daisyui::button>
    <x-daisyui::button variant="link">Link</x-daisyui::button>
    <x-daisyui::button variant="soft" color="primary">Soft</x-daisyui::button>
    <x-daisyui::button variant="outline" color="secondary">Outline</x-daisyui::button>
    <x-daisyui::button variant="dashed" color="accent">Dashed</x-daisyui::button>
</div>


## Prefix and Suffix

```html
<x-daisyui::button>
    <span class="loading loading-spinner"></span>
    With Prefix
</x-daisyui::button>
<x-daisyui::button>
    With Suffix
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-[1.2em]"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
</x-daisyui::button>
```

```html
<x-daisyui::button class="bg-white text-black border-[#e5e5e5]">
    <svg aria-label="Google logo" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g><path d="m0 0H512V512H0" fill="#fff"></path><path fill="#34a853" d="M153 292c30 82 118 95 171 60h62v48A192 192 0 0190 341"></path><path fill="#4285f4" d="m386 400a140 175 0 0053-179H260v74h102q-7 37-38 57"></path><path fill="#fbbc02" d="m90 341a208 200 0 010-171l63 49q-12 37 0 73"></path><path fill="#ea4335" d="m153 219c22-69 116-109 179-50l55-54c-78-75-230-72-297 55"></path></g></svg>
    Login with Google
</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button>
        <x-daisyui::loading />
        With Prefix
    </x-daisyui::button>
    <x-daisyui::button>
        With Suffix
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-[1.2em]"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </x-daisyui::button>
    <x-daisyui::button class="bg-white text-black border-[#e5e5e5]">
        <svg aria-label="Google logo" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g><path d="m0 0H512V512H0" fill="#fff"></path><path fill="#34a853" d="M153 292c30 82 118 95 171 60h62v48A192 192 0 0190 341"></path><path fill="#4285f4" d="m386 400a140 175 0 0053-179H260v74h102q-7 37-38 57"></path><path fill="#fbbc02" d="m90 341a208 200 0 010-171l63 49q-12 37 0 73"></path><path fill="#ea4335" d="m153 219c22-69 116-109 179-50l55-54c-78-75-230-72-297 55"></path></g></svg>
        Login with Google
    </x-daisyui::button>
</div>


## Responsive button

```html
<x-daisyui::button class="lg:btn-xl xl:btn-primary xl:btn-block!">
    Custom CSS Button
</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button class="lg:btn-xl xl:btn-primary xl:btn-block!">
        Responsive Button
    </x-daisyui::button>
</div>



## Advance

```html
<x-daisyui::button
        type="button"
        onclick="alert('Button clicked!')"
        id="main-action-btn"
        name="submit-action"
        title="Click to trigger an alert"
        aria-label="Trigger a greeting alert"
        aria-pressed="false"
>
    Button Attributes
</x-daisyui::button>
```

<div class="component-preview">
    <x-daisyui::button
            type="button"
            onclick="alert('Button clicked!')"
            id="main-action-btn"
            name="submit-action"
            title="Click to trigger an alert"
            aria-label="Trigger a greeting alert"
            aria-pressed="false"
    >
        JS Attributes
    </x-daisyui::button>
</div>
