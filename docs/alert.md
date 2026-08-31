# Alert

Alert informs users about important events.

## Alert

```preview-html
<x-alert class="w-full">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current text-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span>12 unread messages. Tap to see.</span>
</x-alert>
```

## Info color

```preview-html
<x-alert color="info" class="w-full">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span>New software update available.</span>
</x-alert>
```

## Success color

```preview-html
<x-alert color="success" class="w-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>Your purchase has been confirmed!</span>
</x-alert>
```

## Warning color

```preview-html
<x-alert color="warning" class="w-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
    <span>Warning: Invalid email address!</span>
</x-alert>
```

## Error color

```preview-html
<x-alert color="error" class="w-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>Error! Task failed successfully.</span>
</x-alert>
```

## Alert soft style

```preview-html
<x-alert color="info" style="soft" class="w-full">
    12 unread messages. Tap to see.
</x-alert>
<x-alert color="success" style="soft" class="w-full">
    Your purchase has been confirmed!
</x-alert>
<x-alert color="warning" style="soft" class="w-full">
    Warning: Invalid email address!
</x-alert>
<x-alert color="error" style="soft" class="w-full">
    Error! Task failed successfully.
</x-alert>
```

## Alert outline style

```preview-html
<x-alert color="info" style="outline" class="w-full">
    12 unread messages. Tap to see.
</x-alert>
<x-alert color="success" style="outline" class="w-full">
    Your purchase has been confirmed!
</x-alert>
<x-alert color="warning" style="outline" class="w-full">
    Warning: Invalid email address!
</x-alert>
<x-alert color="error" style="outline" class="w-full">
    Error! Task failed successfully.
</x-alert>
```

## Alert dash style

```preview-html
<x-alert color="info" style="dash" class="w-full">
    12 unread messages. Tap to see.
</x-alert>
<x-alert color="success" style="dash" class="w-full">
    Your purchase has been confirmed!
</x-alert>
<x-alert color="warning" style="dash" class="w-full">
    Warning: Invalid email address!
</x-alert>
<x-alert color="error" style="dash" class="w-full">
    Error! Task failed successfully.
</x-alert>
```

## Alert with buttons + responsive

```preview-html
<x-alert direction="vertical" class="w-full sm:!alert-horizontal">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current text-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span>We use cookies for no reason.</span>
    <div>
        <x-button size="sm">Deny</x-button>
        <x-button size="sm" color="primary">Accept</x-button>
    </div>
</x-alert>
```

## Alert with title and description

```preview-html
<x-alert direction="vertical" class="w-full sm:!alert-horizontal">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current text-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <div>
        <h3 class="font-bold">New message!</h3>
        <div class="text-xs">You have 1 unread message</div>
    </div>
    <x-button size="sm">See</x-button>
</x-alert>
```

---

## Reference

### Alert Attributes

| Name | Default | Description |
| --- | --- | --- |
| `color` | null | The alert color: `info`, `success`, `warning`, or `error`. |
| `direction` | null | The layout direction: `vertical` or `horizontal`. |
| `style` | null | The alert style: `outline`, `dash`, or `soft`. |

### Alert Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The alert content. |
