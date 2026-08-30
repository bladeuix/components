# Divider

Divider will be used to separate content vertically or horizontally.

```preview-html
<div class="flex flex-col w-full">
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
  <x-divider>OR</x-divider>
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
</div>
```

## Divider horizontal

```preview-html
<div class="flex w-full">
  <div class="grid h-20 grow card bg-base-300 rounded-box place-items-center">content</div>
  <x-divider direction="horizontal">OR</x-divider>
  <div class="grid h-20 grow card bg-base-300 rounded-box place-items-center">content</div>
</div>
```

## Divider with no text

```preview-html
<div class="flex flex-col w-full">
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
  <x-divider></x-divider>
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
</div>
```

## Divider with colors

```preview-html
<div class="flex flex-col w-full">
  <x-divider>Default</x-divider>
  <x-divider color="neutral">Neutral</x-divider>
  <x-divider color="primary">Primary</x-divider>
  <x-divider color="secondary">Secondary</x-divider>
  <x-divider color="accent">Accent</x-divider>
  <x-divider color="success">Success</x-divider>
  <x-divider color="warning">Warning</x-divider>
  <x-divider color="info">Info</x-divider>
  <x-divider color="error">Error</x-divider>
</div>
```

## Divider in different positions

```preview-html
<div class="flex flex-col w-full">
  <x-divider placement="start">Start</x-divider>
  <x-divider>Default</x-divider>
  <x-divider placement="end">End</x-divider>
</div>
```

## Divider in different positions (horizontal)

```preview-html
<div class="flex w-full justify-center h-52">
  <x-divider direction="horizontal" placement="start">Start</x-divider>
  <x-divider direction="horizontal">Default</x-divider>
  <x-divider direction="horizontal" placement="end">End</x-divider>
</div>
```

---

## Reference

### Divider Attributes

| Name | Default | Description |
| --- | --- | --- |
| `color` | `null` | The divider color: `neutral` , `primary` , `secondary` , `accent` , `info` , `success` , `warning` , or `error` . |
| `direction` | `null` | The divider direction: `horizontal` or `vertical` . |
| `placement` | `null` | The divider placement: `start` or `end` . |

### Divider Slot

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The divider content. |
