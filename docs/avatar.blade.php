# Avatar

Avatars show a thumbnail representation of an individual or business in an interface.

```html
<x-avatar
        image-src="..."
        class="size-24"
        image-alt="Avatar"
/>
```

<div class="component-preview">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar" class="size-24" />
</div>

## Rounded avatars

```html
<x-avatar
        image-src="..."
        image-alt="Rounded avatar"
        class="size-24"
        rounded
/>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp" image-alt="Rounded avatar" rounded class="size-24" />
</div>

## Custom sizes

```html
<x-avatar
    image-src="..."
    image-alt="Large avatar"
    class="size-24"
/>
<x-avatar
    image-src="..."
    image-alt="Medium avatar"
    class="size-16"
/>
<x-avatar
    image-src="..."
    image-alt="Small avatar"
    class="size-12"
/>
```

```html
<x-avatar
    image-src="..."
    image-alt="Extra small avatar"
    class="size-8"
/>
```

<div class="component-preview flex items-center gap-4">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Large avatar" class="size-24 rounded" />
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Medium avatar" class="size-16 rounded" />
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Small avatar" class="size-12 rounded" />
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" image-alt="Extra small avatar" class="size-8 rounded" />
</div>


## Avatar group

```html
<x-avatar-group class="-space-x-6">
    <x-avatar
        image-src="..."
        image-alt="Avatar one"
        class="size-12"
    />
    <x-avatar
        image-src="..."
        image-alt="Avatar two"
        class="size-12"
    />
    <x-avatar
        image-src="..."
        image-alt="Avatar three"
        class="size-12"
    />
</x-avatar-group>
```

<div class="component-preview">
    <x-avatar-group class="-space-x-6">
        <x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar one" class="size-12" />
        <x-avatar image-src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" image-alt="Avatar two" class="size-12" />
        <x-avatar image-src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp" image-alt="Avatar three" class="size-12" />
    </x-avatar-group>
</div>

## Avatar group with counter

```html
<x-avatar-group class="-space-x-6">
    <x-avatar
        image-src="..."
        image-alt="Avatar one"
        class="size-12"
    />
    <x-avatar
        image-src="..."
        image-alt="Avatar two"
        class="size-12"
    />
    <x-avatar
        class="size-12 bg-neutral text-neutral-content"
        abbreviation="+99"
    />
</x-avatar-group>
```

<div class="component-preview">
    <x-avatar-group class="-space-x-6">
        <x-avatar image-src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" image-alt="Avatar one" class="size-12" />
        <x-avatar image-src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" image-alt="Avatar two" class="size-12" />
        <x-avatar abbreviation="+99" class="size-12 bg-neutral text-neutral-content" />
    </x-avatar-group>
</div>

## Avatar presence indicator

```html
<x-avatar
    image-src="..."
    image-alt="Online avatar"
    presence="online"
    class="size-24"
    rounded
/>
<x-avatar
    image-src="..."
    image-alt="Offline avatar"
    presence="offline"
    class="size-24"
    rounded
/>
```

<div class="component-preview flex items-center gap-6">
    <x-avatar presence="online" image-src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" image-alt="Online avatar" rounded class="size-24" />
    <x-avatar presence="offline" image-src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp" image-alt="Offline avatar" rounded class="size-24" />
</div>

## Avatar with ring

```html
<x-avatar
    image-src="..."
    class="size-24 ring-2 ring-primary ring-offset-2 ring-offset-base-100"
    image-alt="Avatar with ring"
    presence="online"
    rounded
/>
```

<div class="component-preview">
    <x-avatar image-src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" image-alt="Avatar with ring" rounded presence="online" class="size-24 ring-2 ring-primary ring-offset-2 ring-offset-base-100" />
</div>

## Avatar placeholders

```html
<x-avatar
    class="size-24 bg-neutral text-neutral-content text-3xl"
    abbreviation="D"
    rounded
/>
<x-avatar
    class="size-16 bg-neutral text-neutral-content text-xl"
    abbreviation="AI"
    presence="online"
    rounded
/>
<x-avatar
    class="size-12 bg-neutral text-neutral-content"
    abbreviation="SY"
    rounded
/>
```

```html
<x-avatar
    class="size-8 bg-neutral text-neutral-content text-xs"
    abbreviation="UI"
    rounded
/>
```

<div class="component-preview flex items-center gap-6">
    <x-avatar abbreviation="D" rounded class="size-24 bg-neutral text-neutral-content text-3xl" />
    <x-avatar presence="online" abbreviation="AI" rounded class="size-16 bg-neutral text-neutral-content text-xl" />
    <x-avatar abbreviation="SY" rounded class="size-12 bg-neutral text-neutral-content" />
    <x-avatar abbreviation="UI" rounded class="size-8 bg-neutral text-neutral-content text-xs" />
</div>