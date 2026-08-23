# Avatar

Avatars show a thumbnail representation of an individual or business in an interface.

```preview-html
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar" class="size-24"/>
```

## Rounded avatars

```preview-html
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp" image-alt="Rounded avatar" rounded class="size-24"/>
```

## Custom sizes

```preview-html
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Large avatar" class="size-24 rounded"/>
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Medium avatar" class="size-16 rounded"/>
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Small avatar" class="size-12 rounded"/>
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Extra small avatar" class="size-8 rounded" />
```

## Avatar group

```preview-html
<x-avatar-group class="-space-x-6">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar one" class="size-12"/>
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" image-alt="Avatar two" class="size-12"/>
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp" image-alt="Avatar three" class="size-12"/>
</x-avatar-group>
```

## Avatar group with counter

```preview-html
<x-avatar-group class="-space-x-6">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar one" class="size-12"/>
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" image-alt="Avatar two" class="size-12"/>
    <x-avatar abbreviation="+99" class="size-12 bg-neutral text-neutral-content"/>
</x-avatar-group>
```

## Avatar presence indicator

```preview-html
<x-avatar presence="online" image-src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" image-alt="Online avatar" rounded class="size-24"/>
<x-avatar presence="offline" image-src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp" image-alt="Offline avatar" rounded class="size-24"/>
```

## Avatar with ring

```preview-html
<x-avatar image-src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" image-alt="Avatar with ring" rounded presence="online" class="size-24 ring-2 ring-primary ring-offset-2 ring-offset-base-100"/>
```

## Avatar placeholders

```preview-html
<x-avatar abbreviation="D" rounded class="size-24 bg-neutral text-neutral-content text-3xl"/>
<x-avatar presence="online" abbreviation="AI" rounded class="size-16 bg-neutral text-neutral-content text-xl"/>
<x-avatar abbreviation="SY" rounded class="size-12 bg-neutral text-neutral-content"/>
<x-avatar abbreviation="UI" rounded class="size-8 bg-neutral text-neutral-content text-xs"/>
```

---

## Reference

### Avatar Attributes

| Name            | Default | Description                                         |
|-----------------|---------|-----------------------------------------------------|
| `presence`      | `null`  | Shows a presence indicator: `online` or `offline`.  |
| `abbreviation`  | `null`  | Text abbreviation displayed instead of an image.    |
| `image-src`     | `null`  | The URL of the avatar image.                        |
| `image-alt`     | `null`  | The alt text for the avatar image.                  |
| `rounded`       | `false` | Makes the avatar circular.                          |

### AvatarGroup Slot

| Name    | Default | Description                        |
|---------|---------|------------------------------------|
| Default | Empty   | The `Avatar` components to group.  |
