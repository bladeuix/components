# Avatar

Avatars show a thumbnail representation of an individual or business in an interface.

```html
<x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/batperson@192.webp"
        class="size-24"
        alt="Avatar"
/>
```

<div class="component-preview">
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar" class="size-24" />
</div>

## Rounded avatars

```html
<x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp"
        alt="Rounded avatar"
        class="size-24"
        rounded
/>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp" alt="Rounded avatar" rounded class="size-24 bg-base-300" />
</div>

## Custom sizes

```html
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/superperson@192.webp"
    alt="Large avatar"
    class="size-24"
/>
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/superperson@192.webp"
    alt="Medium avatar"
    class="size-16"
/>
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/superperson@192.webp"
    alt="Small avatar"
    class="size-12"
/>
```

```html
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/superperson@192.webp"
    alt="Extra small avatar"
    class="size-8"
/>
```

<div class="component-preview flex items-center gap-4">
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Large avatar" class="size-24 rounded bg-base-300" />
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Medium avatar" class="size-16 rounded bg-base-300" />
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Small avatar" class="size-12 rounded bg-base-300" />
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Extra small avatar" class="size-8 rounded bg-base-300" />
</div>


## Avatar group

```html
<x-daisyui::avatar-group class="-space-x-6">
    <x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/batperson@192.webp"
        alt="Avatar one"
        class="size-12"
    />
    <x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp"
        alt="Avatar two"
        class="size-12"
    />
    <x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp"
        alt="Avatar three"
        class="size-12"
    />
</x-daisyui::avatar-group>
```

<div class="component-preview">
    <x-daisyui::avatar-group class="-space-x-6">
        <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" class="size-12 bg-base-300" />
        <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" class="size-12 bg-base-300" />
        <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp" alt="Avatar three" class="size-12 bg-base-300" />
    </x-daisyui::avatar-group>
</div>

## Avatar group with counter

```html
<x-daisyui::avatar-group class="-space-x-6">
    <x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/batperson@192.webp"
        alt="Avatar one"
        class="size-12"
    />
    <x-daisyui::avatar
        src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp"
        alt="Avatar two"
        class="size-12"
    />
    <x-daisyui::avatar
        class="size-12 bg-neutral text-neutral-content"
        abbreviation="+99"
    />
</x-daisyui::avatar-group>
```

<div class="component-preview">
    <x-daisyui::avatar-group class="-space-x-6">
        <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" class="size-12 bg-base-300" />
        <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" class="size-12 bg-base-300" />
        <x-daisyui::avatar abbreviation="+99" class="size-12 bg-neutral text-neutral-content" />
    </x-daisyui::avatar-group>
</div>

## Avatar presence indicator

```html
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/gordon@192.webp"
    alt="Online avatar"
    presence="online"
    class="size-24"
    rounded
/>
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp"
    alt="Offline avatar"
    presence="offline"
    class="size-24"
    rounded
/>
```

<div class="component-preview flex items-center gap-6">
    <x-daisyui::avatar presence="online" src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" alt="Online avatar" rounded class="size-24 bg-base-300" />
    <x-daisyui::avatar presence="offline" src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp" alt="Offline avatar" rounded class="size-24 bg-base-300" />
</div>

## Avatar with ring

```html
<x-daisyui::avatar
    src="https://img.daisyui.com/images/profile/demo/gordon@192.webp"
    class="size-24 ring-2 ring-primary ring-offset-2 ring-offset-base-100"
    alt="Avatar with ring"
    presence="online"
    rounded
/>
```

<div class="component-preview">
    <x-daisyui::avatar src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" alt="Avatar with ring" rounded presence="online" class="size-24 ring-2 ring-primary ring-offset-2 ring-offset-base-100" />
</div>

## Avatar placeholders

```html
<x-daisyui::avatar
    class="size-24 bg-neutral text-neutral-content text-3xl"
    abbreviation="D"
    rounded
/>
<x-daisyui::avatar
    class="size-16 bg-neutral text-neutral-content text-xl"
    abbreviation="AI"
    presence="online"
    rounded
/>
<x-daisyui::avatar
    class="size-12 bg-neutral text-neutral-content"
    abbreviation="SY"
    rounded
/>
```

```html
<x-daisyui::avatar
    class="size-8 bg-neutral text-neutral-content text-xs"
    abbreviation="UI"
    rounded
/>
```

<div class="component-preview flex items-center gap-6">
    <x-daisyui::avatar abbreviation="D" rounded class="size-24 bg-neutral text-neutral-content text-3xl" />
    <x-daisyui::avatar presence="online" abbreviation="AI" rounded class="size-16 bg-neutral text-neutral-content text-xl" />
    <x-daisyui::avatar abbreviation="SY" rounded class="size-12 bg-neutral text-neutral-content" />
    <x-daisyui::avatar abbreviation="UI" rounded class="size-8 bg-neutral text-neutral-content text-xs" />
</div>