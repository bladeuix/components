# Radial progress

Radial progress can be used to show the progress of a task or to show the passing of time.

```html
<x-radial-progress value="70">70%</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress :value="65">65%</x-radial-progress>
</div>


## Different values

```html
<x-radial-progress value="0">0%</x-radial-progress>
<x-radial-progress value="20">20%</x-radial-progress>
<x-radial-progress value="60">60%</x-radial-progress>
<x-radial-progress value="80">80%</x-radial-progress>
```

```html
<x-radial-progress value="100">100%</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress value="0">0%</x-radial-progress>
    <x-radial-progress value="20">20%</x-radial-progress>
    <x-radial-progress value="60">60%</x-radial-progress>
    <x-radial-progress value="80">80%</x-radial-progress>
    <x-radial-progress value="100">100%</x-radial-progress>
</div>


## Custom color

```html
<x-radial-progress value="70" class="text-primary">70%</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress :value="23" class="text-primary">23%</x-radial-progress>
</div>


## With background color and border

```html
<x-radial-progress value="70" class="bg-primary text-primary-content border-primary border-4">70%</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress :value="41" class="bg-primary text-primary-content border-primary border-4">41%</x-radial-progress>
</div>


## Custom size and thickness

```html
<x-radial-progress value="70" size="120" thickness="2">70%</x-radial-progress>
```

```html
<x-radial-progress value="70" size="120" thickness="20">70%</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress :value="65" size="120" thickness="2">65%</x-radial-progress>
    <x-radial-progress :value="36" size="120" thickness="20">36%</x-radial-progress>
</div>


## Responsive radial progress

```html
<x-radial-progress
    value="70" 
    class="size-12 md:size-24 lg:size-32"
>
    70%
</x-radial-progress>
```

<div class="component-preview">
    <x-radial-progress :value="16" class="size-12 md:size-24 lg:size-32">16%</x-radial-progress>
</div>


## Advance

```html
<div 
        class="component-preview flex flex-col gap-4 items-center" 
        x-data="{ progress: 70 }"
>
    <x-radial-progress
        value="0" 
        x-bind:value="progress"
        x-bind:style="'--value:' + progress"
        class="text-primary"
    >
        <span x-text="progress + '%'"></span>
    </x-radial-progress>
    
    <div class="flex gap-2">
        <x-button
                size="sm" 
                x-on:click="progress = Math.max(0, progress - 10)"
        >
            Decrease
        </x-button>
        <x-button
                size="sm" 
                x-on:click="progress = Math.min(100, progress + 10)"
        >
            Increase
        </x-button>
    </div>
</div>
```

<div class="component-preview flex flex-col gap-4 items-center" x-data="{ progress: 70 }">
    <x-radial-progress value="0" x-bind:value="progress" x-bind:style="'--value:' + progress" class="text-primary">
        <span x-text="progress + '%'"></span>
    </x-radial-progress>
    
    <div class="flex gap-2">
        <x-button size="sm" x-on:click="progress = Math.max(0, progress - 10)">Decrease</x-button>
        <x-button size="sm" x-on:click="progress = Math.min(100, progress + 10)">Increase</x-button>
    </div>
</div>
