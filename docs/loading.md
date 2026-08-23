# Loading

Loading shows an animation to indicate that something is loading.

```preview-html
<x-loading/>
```

## Loading types

```preview-html
<x-loading type="spinner"/>
<x-loading type="dots"/>
<x-loading type="ring"/>
<x-loading type="ball"/>
<x-loading type="bars"/>
<x-loading type="infinity"/>
```

## Loading sizes

```preview-html
<x-loading size="xs"/>
<x-loading size="sm"/>
<x-loading size="md"/>
<x-loading size="lg"/>
<x-loading size="xl"/>
```

## Loading colors

```preview-html
<x-loading color="primary"/>
<x-loading color="secondary"/>
<x-loading color="accent"/>
<x-loading color="neutral"/>
<x-loading color="info"/>
<x-loading color="success"/>
<x-loading color="warning"/>
<x-loading color="error"/>
```

## Responsive loading

```preview-html
<x-loading class="loading-xs md:loading-sm lg:loading-md xl:loading-lg"/>
```

## Advance

```preview-html
<div x-data="{ isLoading: true }">
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
```

---

## Reference

### Loading Attributes

| Name | Default | Description |
|------|---------|-------------|
| `type` | `spinner` | The loading type: `spinner`, `dots`, `ring`, `ball`, `bars`, or `infinity`. |
| `size` | `null` | The loading size: `xs`, `sm`, `md`, `lg`, or `xl`. |
| `color` | `null` | The loading color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |