# Status

Status is a really small icon to visually show the current status of an element, like online, offline, error, etc.

```html
<x-daisyui::status></x-daisyui::status>
```

<div class="component-preview">
    <x-daisyui::status></x-daisyui::status>
</div>


## Status sizes

```html
<x-daisyui::status size="xs"></x-daisyui::status>
<x-daisyui::status size="sm"></x-daisyui::status>
<x-daisyui::status size="md"></x-daisyui::status>
<x-daisyui::status size="lg"></x-daisyui::status>
```

```html
<x-daisyui::status size="xl"></x-daisyui::status>
```

<div class="component-preview">
    <x-daisyui::status size="xs"></x-daisyui::status>
    <x-daisyui::status size="sm"></x-daisyui::status>
    <x-daisyui::status size="md"></x-daisyui::status>
    <x-daisyui::status size="lg"></x-daisyui::status>
    <x-daisyui::status size="xl"></x-daisyui::status>
</div>


## Status with colors

```html
<x-daisyui::status color="neutral"></x-daisyui::status>
<x-daisyui::status color="primary"></x-daisyui::status>
<x-daisyui::status color="secondary"></x-daisyui::status>
<x-daisyui::status color="accent"></x-daisyui::status>
<x-daisyui::status color="info"></x-daisyui::status>
<x-daisyui::status color="success"></x-daisyui::status>
<x-daisyui::status color="warning"></x-daisyui::status>
```

```html
<x-daisyui::status color="error"></x-daisyui::status>
```

<div class="component-preview">
    <x-daisyui::status color="neutral"></x-daisyui::status>
    <x-daisyui::status color="primary"></x-daisyui::status>
    <x-daisyui::status color="secondary"></x-daisyui::status>
    <x-daisyui::status color="accent"></x-daisyui::status>
    <x-daisyui::status color="info"></x-daisyui::status>
    <x-daisyui::status color="success"></x-daisyui::status>
    <x-daisyui::status color="warning"></x-daisyui::status>
    <x-daisyui::status color="error"></x-daisyui::status>
</div>


## Status with animation

```html
<x-daisyui::status animation="ping" color="error"></x-daisyui::status> Server is down
<x-daisyui::status animation="bounce" color="info"></x-daisyui::status> Unread messages
```

<div class="component-preview">
    <x-daisyui::status animation="ping" color="error"></x-daisyui::status> Server is down
    <br>
    <x-daisyui::status animation="bounce" color="info"></x-daisyui::status> Unread messages
</div>


## Responsive status

```html
<x-daisyui::status class="status-xs md:status-sm lg:status-md xl:status-lg"></x-daisyui::status>
```

<div class="component-preview">
    <x-daisyui::status class="status-xs md:status-sm lg:status-md xl:status-lg"></x-daisyui::status>
</div>


## Advance

```html
@php
    $status = 'online';
@endphp

<div class="component-preview" x-data="{ status: '{{ $status }}' }">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <x-daisyui::status 
                color="success" 
                x-show="status === 'online'">
            </x-daisyui::status>
            <x-daisyui::status 
                color="error" 
                animation="ping" 
                x-show="status !== 'online'"
                x-cloak>
            </x-daisyui::status>
            <span x-text="status === 'online' ? 'Online' : 'Offline'"></span>
        </div>
        <x-daisyui::button size="sm" @click="status = status === 'online' ? 'offline' : 'online'">
            Toggle Status
        </x-daisyui::button>
    </div>
</div>
```

@php
    $status = 'online';
@endphp

<div class="component-preview" x-data="{ status: '{{ $status }}' }">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <x-daisyui::status 
                color="success" 
                x-show="status === 'online'">
            </x-daisyui::status>
            <x-daisyui::status 
                color="error" 
                animation="ping" 
                x-show="status !== 'online'"
                x-cloak>
            </x-daisyui::status>
            <span x-text="status === 'online' ? 'Online' : 'Offline'"></span>
        </div>
        <x-daisyui::button size="sm" @click="status = status === 'online' ? 'offline' : 'online'">
            Toggle Status
        </x-daisyui::button>
    </div>
</div>
