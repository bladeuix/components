# Checkbox

Checkboxes are used to select or deselect a value.

```preview-html
<x-checkbox checked />
```

## Sizes

```preview-html
<x-checkbox size="xs" checked />
<x-checkbox size="sm" checked />
<x-checkbox size="md" checked />
<x-checkbox size="lg" checked />
<x-checkbox size="xl" checked />
```

## Colors

```preview-html
<x-checkbox color="primary" checked />
<x-checkbox color="secondary" checked />
<x-checkbox color="accent" checked />
<x-checkbox color="neutral" checked />
<x-checkbox color="info" checked />
<x-checkbox color="success" checked />
<x-checkbox color="warning" checked />
<x-checkbox color="error" checked />
```

## Disabled

```preview-html
<x-checkbox disabled />
<x-checkbox checked disabled />
```

## Indeterminate

```preview-tabs
:::code Vanilla html
<input id="indeterminate-checkbox" type="checkbox" class="checkbox checkbox-primary" />
<script>
    document.getElementById("indeterminate-checkbox").indeterminate = true
</script>
:::

:::code Alpine.js html
<div x-data x-init="$refs.checkbox.indeterminate = true">
    <input x-ref="checkbox" type="checkbox" class="checkbox checkbox-primary" />
</div>
:::

:::code Livewire blade
<div x-data="{ indeterminate: @entangle('indeterminate') }">
    <input type="checkbox" wire:model="selected" class="checkbox checkbox-primary" />
</div>
:::

:::preview
<div x-data x-init="$refs.checkbox.indeterminate = true">
    <input x-ref="checkbox" type="checkbox" class="checkbox checkbox-primary" aria-label="Indeterminate checkbox" />
</div>
:::
```

## Checkbox with custom colors

```preview-html
<x-checkbox checked class="border-indigo-600 bg-indigo-500 checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800" />
```

---

## Reference

### Checkbox Attributes

| Name    | Default | Description                                                                                                |
|---------|---------|------------------------------------------------------------------------------------------------------------|
| `size`  | `null`  | The checkbox size: `xs`, `sm`, `md`, `lg`, or `xl`.                                                        |
| `color` | `null`  | The checkbox color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |
