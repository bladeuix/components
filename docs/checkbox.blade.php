# Checkbox

Checkboxes are used to select or deselect a value.

```html
<x-daisyui::checkbox checked />
```

<div class="component-preview">
    <x-daisyui::checkbox checked />
</div>

## With label

```html
<x-daisyui::checkbox label="Remember me" checked />
```

<div class="component-preview">
    <x-daisyui::checkbox label="Remember me" checked />
</div>

## Sizes

```html
<x-daisyui::checkbox size="xs" checked />
<x-daisyui::checkbox size="sm" checked />
<x-daisyui::checkbox size="md" checked />
<x-daisyui::checkbox size="lg" checked />
```

```html
<x-daisyui::checkbox size="xl" checked />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::checkbox size="xs" checked />
    <x-daisyui::checkbox size="sm" checked />
    <x-daisyui::checkbox size="md" checked />
    <x-daisyui::checkbox size="lg" checked />
    <x-daisyui::checkbox size="xl" checked />
</div>

## Colors

```html
<x-daisyui::checkbox color="primary" checked />
<x-daisyui::checkbox color="secondary" checked />
<x-daisyui::checkbox color="accent" checked />
<x-daisyui::checkbox color="neutral" checked />
<x-daisyui::checkbox color="info" checked />
<x-daisyui::checkbox color="success" checked />
<x-daisyui::checkbox color="warning" checked />
```

```html
<x-daisyui::checkbox color="error" checked />
```

<div class="component-preview flex flex-wrap items-center gap-2">
    <x-daisyui::checkbox color="primary" checked />
    <x-daisyui::checkbox color="secondary" checked />
    <x-daisyui::checkbox color="accent" checked />
    <x-daisyui::checkbox color="neutral" checked />
    <x-daisyui::checkbox color="info" checked />
    <x-daisyui::checkbox color="success" checked />
    <x-daisyui::checkbox color="warning" checked />
    <x-daisyui::checkbox color="error" checked />
</div>

## Disabled

```html
<x-daisyui::checkbox disabled />
<x-daisyui::checkbox checked disabled />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::checkbox disabled />
    <x-daisyui::checkbox checked disabled />
</div>

## Indeterminate

```html
<x-daisyui::checkbox x-ref="checkbox" x-init="$el.indeterminate = true" />
```

<div class="component-preview" x-data x-init="$refs.checkbox.indeterminate = true">
    <x-daisyui::checkbox x-ref="checkbox" />
</div>

## Checkbox with custom colors

```html
<x-daisyui::checkbox
    checked
    class="border-indigo-600 bg-indigo-500 checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800"
/>
```

<div class="component-preview">
    <x-daisyui::checkbox checked class="border-indigo-600 bg-indigo-500 checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800" />
</div>