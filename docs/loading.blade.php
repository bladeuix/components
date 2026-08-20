# Loading

Loading shows an animation to indicate that something is loading.

```html
<x-daisyui::loading />
```

<div class="component-preview">
    <x-daisyui::loading />
</div>


## Loading types

```html
<x-daisyui::loading type="spinner" />
<x-daisyui::loading type="dots" />
<x-daisyui::loading type="ring" />
<x-daisyui::loading type="ball" />
<x-daisyui::loading type="bars" />
```

```html
<x-daisyui::loading type="infinity" />
```

<div class="component-preview">
    <x-daisyui::loading type="spinner" />
    <x-daisyui::loading type="dots" />
    <x-daisyui::loading type="ring" />
    <x-daisyui::loading type="ball" />
    <x-daisyui::loading type="bars" />
    <x-daisyui::loading type="infinity" />
</div>


## Loading sizes

```html
<x-daisyui::loading size="xs" />
<x-daisyui::loading size="sm" />
<x-daisyui::loading size="md" />
<x-daisyui::loading size="lg" />
```

```html
<x-daisyui::loading size="xl" />
```

<div class="component-preview">
    <x-daisyui::loading size="xs" />
    <x-daisyui::loading size="sm" />
    <x-daisyui::loading size="md" />
    <x-daisyui::loading size="lg" />
    <x-daisyui::loading size="xl" />
</div>


## Loading colors

```html
<x-daisyui::loading color="primary" />
<x-daisyui::loading color="secondary" />
<x-daisyui::loading color="accent" />
<x-daisyui::loading color="neutral" />
<x-daisyui::loading color="info" />
<x-daisyui::loading color="success" />
<x-daisyui::loading color="warning" />
```

```html
<x-daisyui::loading color="error" />
```

<div class="component-preview">
    <x-daisyui::loading color="primary" />
    <x-daisyui::loading color="secondary" />
    <x-daisyui::loading color="accent" />
    <x-daisyui::loading color="neutral" />
    <x-daisyui::loading color="info" />
    <x-daisyui::loading color="success" />
    <x-daisyui::loading color="warning" />
    <x-daisyui::loading color="error" />
</div>


## Responsive loading

```html
<x-daisyui::loading class="loading-xs md:loading-sm lg:loading-md xl:loading-lg" />
```

<div class="component-preview">
    <x-daisyui::loading class="loading-xs md:loading-sm lg:loading-md xl:loading-lg" />
</div>


## Advance

```html
@php
    $isLoading = true;
@endphp

<div class="component-preview" x-data="{ isLoading: {{ $isLoading ? 'true' : 'false' }} }">
    <x-daisyui::loading
            aria-label="Fetching your profile..."
            role="status"
            aria-live="polite"
            x-show="isLoading"
            x-cloak
            style="opacity: 0.8;"
    />
    <x-daisyui::button 
            @click="isLoading = !isLoading"
            x-text="isLoading ? 'Stop Loading' : 'Start Loading'"
    >
    </x-daisyui::button>
</div>
```

@php
    $isLoading = true;
@endphp

<div class="component-preview" x-data="{ isLoading: {{ $isLoading ? 'true' : 'false' }} }">
    <x-daisyui::loading
            aria-label="Fetching your profile..."
            role="status"
            aria-live="polite"
            x-show="isLoading"
            x-cloak
            style="opacity: 0.8;"
    />
    <x-daisyui::button @click="isLoading = !isLoading">
        <span x-text="isLoading ? 'Stop Loading' : 'Start Loading'"></span>
    </x-daisyui::button>
</div>
