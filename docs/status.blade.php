# Status

Status is a really small icon to visually show the current status of an element, like online, offline, error, etc.

```html
<x-status/>
```

<div class="component-preview">
    <x-status/>
</div>


## Status sizes

```html
<x-status size="xs"></x-status>
<x-status size="sm"></x-status>
<x-status size="md"></x-status>
<x-status size="lg"></x-status>
```

```html
<x-status size="xl"></x-status>
```

<div class="component-preview">
    <x-status size="xs"></x-status>
    <x-status size="sm"></x-status>
    <x-status size="md"></x-status>
    <x-status size="lg"></x-status>
    <x-status size="xl"></x-status>
</div>


## Status with colors

```html
<x-status color="neutral"></x-status>
<x-status color="primary"></x-status>
<x-status color="secondary"></x-status>
<x-status color="accent"></x-status>
<x-status color="info"></x-status>
<x-status color="success"></x-status>
<x-status color="warning"></x-status>
```

```html
<x-status color="error"></x-status>
```

<div class="component-preview">
    <x-status color="neutral"></x-status>
    <x-status color="primary"></x-status>
    <x-status color="secondary"></x-status>
    <x-status color="accent"></x-status>
    <x-status color="info"></x-status>
    <x-status color="success"></x-status>
    <x-status color="warning"></x-status>
    <x-status color="error"></x-status>
</div>


## Status with animation

```html
<x-status animation="ping" color="error"></x-status> Server is down
<x-status animation="bounce" color="info"></x-status> Unread messages
```

<div class="component-preview">
    <x-status animation="ping" color="error"></x-status> Server is down
    <br>
    <x-status animation="bounce" color="info"></x-status> Unread messages
</div>


## Responsive status

```html
<x-status class="status-xs md:status-sm lg:status-md xl:status-lg"></x-status>
```

<div class="component-preview">
    <x-status class="status-xs md:status-sm lg:status-md xl:status-lg"></x-status>
</div>


## Advance

```html
<div class="component-preview" x-data="{ status: 'online' }">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <x-status
                color="success" 
                x-show="status === 'online'">
            </x-status>
            <x-status
                color="error" 
                animation="ping" 
                x-show="status !== 'online'"
                x-cloak>
            </x-status>
            <span x-text="status === 'online' ? 'Online' : 'Offline'"></span>
        </div>
        <x-button size="sm" x-on:click="status = status === 'online' ? 'offline' : 'online'">
            Toggle Status
        </x-button>
    </div>
</div>
```

<div class="component-preview" x-data="{ status: 'online' }">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <x-status
                color="success" 
                x-show="status === 'online'">
            </x-status>
            <x-status
                color="error" 
                animation="ping" 
                x-show="status !== 'online'"
                x-cloak>
            </x-status>
            <span x-text="status === 'online' ? 'Online' : 'Offline'"></span>
        </div>
        <x-button size="sm" x-on:click="status = status === 'online' ? 'offline' : 'online'">
            Toggle Status
        </x-button>
    </div>
</div>
