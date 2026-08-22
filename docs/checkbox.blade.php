# Checkbox

Checkboxes are used to select or deselect a value.

```html
<x-daisyui::checkbox checked />
```

<div class="component-preview">
    <x-daisyui::checkbox checked />
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
```

```html
<x-daisyui::checkbox checked disabled />
```

<div class="component-preview flex items-center gap-2">
    <x-daisyui::checkbox disabled />
    <x-daisyui::checkbox checked disabled />
</div>

## Indeterminate

<div class="component-preview code-example">
    <x-daisyui::tabs style="box" class="w-full">
        <x-daisyui::tab name="indeterminate-tabs" label="Vanilla" active class="bg-base-100 border-base-300">
```html
<x-daisyui::checkbox id="indeterminate-checkbox" />

<script>
    document.getElementById("indeterminate-checkbox").indeterminate = true
</script>
```
        </x-daisyui::tab>

        <x-daisyui::tab name="indeterminate-tabs" label="Alpine.js" class="bg-base-100 border-base-300">
```html
<div x-data x-init="$refs.checkbox.indeterminate = true">
    <x-daisyui::checkbox x-ref="checkbox" />
</div>
```
        </x-daisyui::tab>

        <x-daisyui::tab name="indeterminate-tabs" label="Livewire" class="bg-base-100 border-base-300">
```html
<div
    x-data="{ indeterminate: @entangle('indeterminate') }"
    x-init="$refs.checkbox.indeterminate = indeterminate"
    x-effect="$refs.checkbox.indeterminate = indeterminate"
>
    <x-daisyui::checkbox wire:model="selected" x-ref="checkbox" />
</div>
```
        </x-daisyui::tab>
    </x-daisyui::tabs>
</div>

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