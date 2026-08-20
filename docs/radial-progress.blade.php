# Radial progress

Radial progress can be used to show the progress of a task or to show the passing of time.

```html
<x-daisyui::radial-progress value="70">70%</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress :value="65">65%</x-daisyui::radial-progress>
</div>


## Different values

```html
<x-daisyui::radial-progress value="0">0%</x-daisyui::radial-progress>
<x-daisyui::radial-progress value="20">20%</x-daisyui::radial-progress>
<x-daisyui::radial-progress value="60">60%</x-daisyui::radial-progress>
<x-daisyui::radial-progress value="80">80%</x-daisyui::radial-progress>
```

```html
<x-daisyui::radial-progress value="100">100%</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress value="0">0%</x-daisyui::radial-progress>
    <x-daisyui::radial-progress value="20">20%</x-daisyui::radial-progress>
    <x-daisyui::radial-progress value="60">60%</x-daisyui::radial-progress>
    <x-daisyui::radial-progress value="80">80%</x-daisyui::radial-progress>
    <x-daisyui::radial-progress value="100">100%</x-daisyui::radial-progress>
</div>


## Custom color

```html
<x-daisyui::radial-progress value="70" class="text-primary">70%</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress :value="23" class="text-primary">23%</x-daisyui::radial-progress>
</div>


## With background color and border

```html
<x-daisyui::radial-progress value="70" class="bg-primary text-primary-content border-primary border-4">70%</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress :value="41" class="bg-primary text-primary-content border-primary border-4">41%</x-daisyui::radial-progress>
</div>


## Custom size and thickness

```html
<x-daisyui::radial-progress value="70" size="120" thickness="2">70%</x-daisyui::radial-progress>
```

```html
<x-daisyui::radial-progress value="70" size="120" thickness="20">70%</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress :value="65" size="120" thickness="2">65%</x-daisyui::radial-progress>
    <x-daisyui::radial-progress :value="36" size="120" thickness="20">36%</x-daisyui::radial-progress>
</div>


## Responsive radial progress

```html
<x-daisyui::radial-progress 
    value="70" 
    class="size-12 md:size-24 lg:size-32"
>
    70%
</x-daisyui::radial-progress>
```

<div class="component-preview">
    <x-daisyui::radial-progress :value="16" class="size-12 md:size-24 lg:size-32">16%</x-daisyui::radial-progress>
</div>


## Advance

```html
@php
    $progressValue = 70;
@endphp

<div 
        class="component-preview flex flex-col gap-4 items-center" 
        x-data="{ progress: {{ $progressValue }} }"
>
    <x-daisyui::radial-progress 
        value="0" 
        x-bind:value="progress"
        x-bind:style="'--value:' + progress"
        class="text-primary"
    >
        <span x-text="progress + '%'"></span>
    </x-daisyui::radial-progress>
    
    <div class="flex gap-2">
        <x-daisyui::button 
                size="sm" 
                @click="progress = Math.max(0, progress - 10)"
        >
            Decrease
        </x-daisyui::button>
        <x-daisyui::button 
                size="sm" 
                @click="progress = Math.min(100, progress + 10)"
        >
            Increase
        </x-daisyui::button>
    </div>
</div>
```

@php
    $progressValue = 70;
@endphp

<div class="component-preview flex flex-col gap-4 items-center" x-data="{ progress: {{ $progressValue }} }">
    <x-daisyui::radial-progress value="0" x-bind:value="progress" x-bind:style="'--value:' + progress" class="text-primary">
        <span x-text="progress + '%'"></span>
    </x-daisyui::radial-progress>
    
    <div class="flex gap-2">
        <x-daisyui::button size="sm" @click="progress = Math.max(0, progress - 10)">Decrease</x-daisyui::button>
        <x-daisyui::button size="sm" @click="progress = Math.min(100, progress + 10)">Increase</x-daisyui::button>
    </div>
</div>
