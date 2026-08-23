# Status

Status is a really small icon to visually show the current status of an element, like online, offline, error, etc.

```preview-html
<x-status/>
```

## Status sizes

```preview-html
<x-status size="xs"></x-status>
<x-status size="sm"></x-status>
<x-status size="md"></x-status>
<x-status size="lg"></x-status>
<x-status size="xl"></x-status>
```

## Status with colors

```preview-html
<x-status color="neutral"></x-status>
<x-status color="primary"></x-status>
<x-status color="secondary"></x-status>
<x-status color="accent"></x-status>
<x-status color="info"></x-status>
<x-status color="success"></x-status>
<x-status color="warning"></x-status>
<x-status color="error"></x-status>
```

## Status with animation

```preview-html
<x-status animation="ping" color="error"></x-status>
Server is down
<br>
<x-status animation="bounce" color="info"></x-status>
Unread messages
```

## Responsive status

```preview-html
<x-status class="status-xs md:status-sm lg:status-md xl:status-lg"></x-status>
```

## Advance

```preview-html
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
```

---

## Reference

### Status Attributes

| Name | Default | Description |
|---|---|---|
| `color` | `null` | The status color: `neutral`, `primary`, `secondary`, `accent`, `info`, `success`, `warning`, or `error`. |
| `size` | `null` | The status size: `xs`, `sm`, `md`, `lg`, or `xl`. |
| `animation` | `null` | The animation style: `ping` or `bounce`. |
