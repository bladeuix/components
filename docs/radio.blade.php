# Radio

Radio buttons allow the user to select one option from a set.

> Each set of radio inputs should have a unique `name` attribute to avoid conflicts with other sets of radio inputs on the same page.
> The `name` is required and is also used as the radio input's `id`.

```html
<x-daisyui::radio name="radio" checked />
<x-daisyui::radio name="radio" />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::radio name="radio" checked />
    <x-daisyui::radio name="radio" />
</div>

## Radio sizes

```html
<x-daisyui::radio name="radio-sizes" size="xs" checked />
<x-daisyui::radio name="radio-sizes" size="sm" />
<x-daisyui::radio name="radio-sizes" size="md" />
<x-daisyui::radio name="radio-sizes" size="lg" />
```

```html
<x-daisyui::radio name="radio-sizes" size="xl" />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::radio name="radio-sizes" size="xs" checked />
    <x-daisyui::radio name="radio-sizes" size="sm" />
    <x-daisyui::radio name="radio-sizes" size="md" />
    <x-daisyui::radio name="radio-sizes" size="lg" />
    <x-daisyui::radio name="radio-sizes" size="xl" />
</div>

## Colors

```html
<x-daisyui::radio name="radio-neutral" color="neutral" checked />
<x-daisyui::radio name="radio-primary" color="primary" checked />
<x-daisyui::radio name="radio-secondary" color="secondary" checked />
<x-daisyui::radio name="radio-accent" color="accent" checked />
<x-daisyui::radio name="radio-success" color="success" checked />
<x-daisyui::radio name="radio-warning" color="warning" checked />
```

```html
<x-daisyui::radio name="radio-info" color="info" checked />
```

```html
<x-daisyui::radio name="radio-error" color="error" checked />
```

<div class="component-preview flex flex-wrap items-center gap-2">
    <x-daisyui::radio name="radio-neutral" color="neutral" checked />
    <x-daisyui::radio name="radio-primary" color="primary" checked />
    <x-daisyui::radio name="radio-secondary" color="secondary" checked />
    <x-daisyui::radio name="radio-accent" color="accent" checked />
    <x-daisyui::radio name="radio-success" color="success" checked />
    <x-daisyui::radio name="radio-warning" color="warning" checked />
    <x-daisyui::radio name="radio-info" color="info" checked />
    <x-daisyui::radio name="radio-error" color="error" checked />
</div>

## Disabled

```html
<x-daisyui::radio name="radio-disabled" checked disabled />
```

```html
<x-daisyui::radio name="radio-disabled" disabled />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::radio name="radio-disabled" checked disabled />
    <x-daisyui::radio name="radio-disabled" disabled />
</div>

## Radio with custom colors

```html
<x-daisyui::radio
    name="radio-custom"
    checked
    class="border-red-300 bg-red-100 checked:border-red-600 checked:bg-red-200 checked:text-red-600"
/>
```

```html
<x-daisyui::radio
    name="radio-custom"
    class="border-blue-300 bg-blue-100 checked:border-blue-600 checked:bg-blue-200 checked:text-blue-600"
/>
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::radio name="radio-custom" checked class="border-red-300 bg-red-100 checked:border-red-600 checked:bg-red-200 checked:text-red-600" />
    <x-daisyui::radio name="radio-custom" class="border-blue-300 bg-blue-100 checked:border-blue-600 checked:bg-blue-200 checked:text-blue-600" />
</div>
