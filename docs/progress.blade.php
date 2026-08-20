# Progress

Progress bar can be used to show the progress of a task or to show the passing of time.

```html
<x-daisyui::progress value="10" max="100" class="w-56" />
```

<div class="component-preview flex flex-col gap-2 items-center">
    <x-daisyui::progress :value="rand(20,80)" max="100" class="w-56" />
</div>


## Progress colors

```html
<x-daisyui::progress color="primary" value="10" max="100" class="w-56" />
<x-daisyui::progress color="secondary" value="40" max="100" class="w-56" />
<x-daisyui::progress color="accent" value="70" max="100" class="w-56" />
<x-daisyui::progress color="neutral" value="100" max="100" class="w-56" />

<x-daisyui::progress color="info" value="10" max="100" class="w-56" />
<x-daisyui::progress color="success" value="40" max="100" class="w-56" />
<x-daisyui::progress color="warning" value="70" max="100" class="w-56" />
```

```html
<x-daisyui::progress color="error" value="100" max="100" class="w-56" />
```

<div class="component-preview flex flex-col gap-2 items-center">
    <x-daisyui::progress color="primary" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="secondary" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="accent" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="neutral" :value="rand(20,80)" max="100" class="w-56" />
    <br>
    <x-daisyui::progress color="info" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="success" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="warning" :value="rand(20,80)" max="100" class="w-56" />
    <x-daisyui::progress color="error" :value="rand(20,80)" max="100" class="w-56" />
</div>


## Indeterminate (without value)

```html
<x-daisyui::progress class="w-56" />
```

<div class="component-preview flex flex-col gap-2 items-center">
    <x-daisyui::progress class="w-56" />
</div>


## Responsive progress

```html
<x-daisyui::progress 
        value="40" 
        max="100" 
        class="w-24 md:w-56 lg:w-80"
/>
```

<div class="component-preview flex flex-col gap-2 items-center">
    <x-daisyui::progress 
            :value="rand(20,80)"  
            max="100" 
            class="w-24 md:w-56 lg:w-80"
    />
</div>


## Advance

```html
@php
    $progressValue = 50;
@endphp

<div 
        class="component-preview flex flex-col gap-4 items-center" 
        x-data="{ progress: {{ $progressValue }} }"
>
    <x-daisyui::progress 
            value="0" 
            x-bind:value="progress"
            max="100" 
            class="w-56" 
            color="primary" 
    />
    
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
    
    <span x-text="`Current progress: ${progress}%`" class="text-sm font-bold"></span>
</div>
```

@php
    $progressValue = 50;
@endphp

<div class="component-preview flex flex-col gap-4 items-center" x-data="{ progress: {{ $progressValue }} }">
    <x-daisyui::progress value="0" x-bind:value="progress" max="100" color="primary" />
    <div class="flex gap-2">
        <x-daisyui::button size="sm" @click="progress = Math.max(0, progress - 10)">Decrease</x-daisyui::button>
        <x-daisyui::button size="sm" @click="progress = Math.min(100, progress + 10)">Increase</x-daisyui::button>
    </div>
    <span x-text="`Current progress: ${progress}%`" class="text-sm font-bold"></span>
</div>
