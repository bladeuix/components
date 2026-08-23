# Loading

Loading shows an animation to indicate that something is loading.

```preview-tabs
:::code Vanilla html
<x-loading/>
:::

:::code Alpine.js html
<x-loading/>
:::

:::code Livewire blade
<x-loading wire:loading wire:target="submit"/>
:::

:::code HTMX html
<x-loading class="htmx-indicator"/>
:::

:::preview
<x-loading/>
:::
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

```preview-tabs
:::code Vanilla html
<div>
    <div id="loading-spinner" style="display: none;">
        <x-loading aria-label="Fetching your profile..." role="status" aria-live="polite"/>
    </div>
    <x-button onclick="toggleLoading()">
        <span id="loading-text">Start Loading</span>
    </x-button>
</div>
<script>
    function toggleLoading() {
        const spinner = document.getElementById('loading-spinner');
        const text = document.getElementById('loading-text');
        const isVisible = spinner.style.display !== 'none';
        spinner.style.display = isVisible ? 'none' : 'block';
        text.textContent = isVisible ? 'Start Loading' : 'Stop Loading';
    }
</script>
:::

:::code Alpine.js html
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
:::

:::code Livewire blade
<div>
    <x-loading
            aria-label="Fetching your profile..."
            role="status"
            aria-live="polite"
            wire:loading
            wire:target="toggleLoading"
            class="opacity-80"
    />
    <x-button wire:click="toggleLoading">
        Toggle Loading
    </x-button>
</div>
:::

:::code HTMX html
<div>
    <div id="loading-container">
        <x-loading
                aria-label="Fetching your profile..."
                role="status"
                aria-live="polite"
                class="opacity-80"
        />
    </div>
    <x-button
            hx-post="/loading/toggle"
            hx-target="#loading-container"
            hx-swap="outerHTML"
    >
        Toggle Loading
    </x-button>
</div>
:::

:::preview
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
:::
```

---

## Reference

### Loading Attributes

| Name | Default | Description |
|------|---------|-------------|
| `type` | `spinner` | The loading type: `spinner`, `dots`, `ring`, `ball`, `bars`, or `infinity`. |
| `size` | `null` | The loading size: `xs`, `sm`, `md`, `lg`, or `xl`. |
| `color` | `null` | The loading color: `primary`, `secondary`, `accent`, `neutral`, `info`, `success`, `warning`, or `error`. |