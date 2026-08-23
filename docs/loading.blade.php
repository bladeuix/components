# Loading

Loading shows an animation to indicate that something is loading.

```html
<x-loading />
```

<div class="component-preview">
    <x-loading />
</div>


## Loading types

```html
<x-loading type="spinner" />
<x-loading type="dots" />
<x-loading type="ring" />
<x-loading type="ball" />
<x-loading type="bars" />
```

```html
<x-loading type="infinity" />
```

<div class="component-preview">
    <x-loading type="spinner" />
    <x-loading type="dots" />
    <x-loading type="ring" />
    <x-loading type="ball" />
    <x-loading type="bars" />
    <x-loading type="infinity" />
</div>


## Loading sizes

```html
<x-loading size="xs" />
<x-loading size="sm" />
<x-loading size="md" />
<x-loading size="lg" />
```

```html
<x-loading size="xl" />
```

<div class="component-preview">
    <x-loading size="xs" />
    <x-loading size="sm" />
    <x-loading size="md" />
    <x-loading size="lg" />
    <x-loading size="xl" />
</div>


## Loading colors

```html
<x-loading color="primary" />
<x-loading color="secondary" />
<x-loading color="accent" />
<x-loading color="neutral" />
<x-loading color="info" />
<x-loading color="success" />
<x-loading color="warning" />
```

```html
<x-loading color="error" />
```

<div class="component-preview">
    <x-loading color="primary" />
    <x-loading color="secondary" />
    <x-loading color="accent" />
    <x-loading color="neutral" />
    <x-loading color="info" />
    <x-loading color="success" />
    <x-loading color="warning" />
    <x-loading color="error" />
</div>


## Responsive loading

```html
<x-loading class="loading-xs md:loading-sm lg:loading-md xl:loading-lg" />
```

<div class="component-preview">
    <x-loading class="loading-xs md:loading-sm lg:loading-md xl:loading-lg" />
</div>


## Advance

```html
<div class="component-preview" x-data="{ isLoading: true }">
    <x-loading
            aria-label="Fetching your profile..."
            role="status"
            aria-live="polite"
            x-show="isLoading"
            x-cloak
            class="opacity-80"
    />
    <x-button
            x-on:click="isLoading = !isLoading"
    >
        <span x-text="isLoading ? 'Stop Loading' : 'Start Loading'"></span>
    </x-button>
</div>
```

<div class="component-preview" x-data="{ isLoading: true }">
    <x-loading
            aria-label="Fetching your profile..."
            role="status"
            aria-live="polite"
            x-show="isLoading"
            x-cloak
            class="opacity-80"
    />
    <x-button x-on:click="isLoading = !isLoading">
        <span x-text="isLoading ? 'Stop Loading' : 'Start Loading'"></span>
    </x-button>
</div>

---

## Reference

### Loading Attributes

| Name    | Default   | Description                                                                                               |
|---------|-----------|-----------------------------------------------------------------------------------------------------------|
| `type`  | `spinner` | The loading type: `spinner`, `dots`, `ring`, `ball`, `bars`, or `infinity`.                               |
| `size`  | `null`    | The loading size: `xs`, `sm`, `md`, `lg`, or `xl`.                                                        |
| `color` | `null`    | The loading color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |
