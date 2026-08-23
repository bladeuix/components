# Checkbox

Checkboxes are used to select or deselect a value.

```html
<x-checkbox checked />
```

<div class="component-preview">
    <x-checkbox checked />
</div>

## Sizes

```html
<x-checkbox size="xs" checked />
<x-checkbox size="sm" checked />
<x-checkbox size="md" checked />
<x-checkbox size="lg" checked />
```

```html
<x-checkbox size="xl" checked />
```

<div class="component-preview flex items-center gap-2">
    <x-checkbox size="xs" checked />
    <x-checkbox size="sm" checked />
    <x-checkbox size="md" checked />
    <x-checkbox size="lg" checked />
    <x-checkbox size="xl" checked />
</div>

## Colors

```html
<x-checkbox color="primary" checked />
<x-checkbox color="secondary" checked />
<x-checkbox color="accent" checked />
<x-checkbox color="neutral" checked />
<x-checkbox color="info" checked />
<x-checkbox color="success" checked />
<x-checkbox color="warning" checked />
```

```html
<x-checkbox color="error" checked />
```

<div class="component-preview flex flex-wrap items-center gap-2">
    <x-checkbox color="primary" checked />
    <x-checkbox color="secondary" checked />
    <x-checkbox color="accent" checked />
    <x-checkbox color="neutral" checked />
    <x-checkbox color="info" checked />
    <x-checkbox color="success" checked />
    <x-checkbox color="warning" checked />
    <x-checkbox color="error" checked />
</div>

## Disabled

```html
<x-checkbox disabled />
```

```html
<x-checkbox checked disabled />
```

<div class="component-preview flex items-center gap-2">
    <x-checkbox disabled />
    <x-checkbox checked disabled />
</div>

## Indeterminate

<div class="component-preview code-example">
    <x-tabs style="box" class="w-full">
        <x-tab name="indeterminate-tabs" label="Vanilla" active class="bg-base-100 border-base-300">
```html
<x-checkbox id="indeterminate-checkbox" />

<script>
    document.getElementById("indeterminate-checkbox").indeterminate = true
</script>
```
        </x-tab>

        <x-tab name="indeterminate-tabs" label="Alpine.js" class="bg-base-100 border-base-300">
```html
<div x-data x-init="$refs.checkbox.indeterminate = true">
    <x-checkbox x-ref="checkbox" />
</div>
```
        </x-tab>

        <x-tab name="indeterminate-tabs" label="Livewire" class="bg-base-100 border-base-300">
```html
<div
    x-data="{ indeterminate: @entangle('indeterminate') }"
    x-init="$refs.checkbox.indeterminate = indeterminate"
    x-effect="$refs.checkbox.indeterminate = indeterminate"
>
    <x-checkbox wire:model="selected" x-ref="checkbox" />
</div>
```
        </x-tab>
    </x-tabs>
</div>

<div class="component-preview" x-data x-init="$refs.checkbox.indeterminate = true">
    <x-checkbox x-ref="checkbox" />
</div>

## Checkbox with custom colors

```html
<x-checkbox
    checked
    class="border-indigo-600 bg-indigo-500 checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800"
/>
```

<div class="component-preview">
    <x-checkbox checked class="border-indigo-600 bg-indigo-500 checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800" />
</div>

---

## Reference

### Checkbox Attributes

| Name    | Default | Description                                                                                                |
|---------|---------|------------------------------------------------------------------------------------------------------------|
| `size`  | `null`  | The checkbox size: `xs`, `sm`, `md`, `lg`, or `xl`.                                                        |
| `color` | `null`  | The checkbox color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |