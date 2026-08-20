# Avatar

Avatars show a thumbnail representation of an individual or business in an interface.

```html
<x-daisyui::avatar>
    <div class="w-24 rounded bg-base-300">
        <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar" />
    </div>
</x-daisyui::avatar>
```

<div class="component-preview">
    <x-daisyui::avatar>
        <div class="w-24 rounded bg-base-300">
            <img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar" />
        </div>
    </x-daisyui::avatar>
</div>

## Custom sizes

```html
<x-daisyui::avatar><div class="w-24 rounded"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Large avatar" /></div></x-daisyui::avatar>
<x-daisyui::avatar><div class="w-16 rounded"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Medium avatar" /></div></x-daisyui::avatar>
<x-daisyui::avatar><div class="w-12 rounded"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Small avatar" /></div></x-daisyui::avatar>
```

```html
<x-daisyui::avatar><div class="w-8 rounded"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Extra small avatar" /></div></x-daisyui::avatar>
```

<div class="component-preview flex items-center gap-4">
    <x-daisyui::avatar><div class="w-24 rounded bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Large avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-16 rounded bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Medium avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-12 rounded bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Small avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-8 rounded bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp" alt="Extra small avatar" /></div></x-daisyui::avatar>
</div>

## Rounded and masked avatars

```html
<x-daisyui::avatar><div class="w-24 rounded-xl"><img src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp" alt="Rounded avatar" /></div></x-daisyui::avatar>
<x-daisyui::avatar><div class="w-24 rounded-full"><img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="Circular avatar" /></div></x-daisyui::avatar>
<x-daisyui::avatar><div class="mask mask-heart w-24"><img src="https://img.daisyui.com/images/profile/demo/distracted3@192.webp" alt="Heart avatar" /></div></x-daisyui::avatar>
```

<div class="component-preview flex flex-wrap items-center gap-6">
    <x-daisyui::avatar><div class="w-24 rounded-xl bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/yellingwoman@192.webp" alt="Rounded avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-24 rounded-full bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="Circular avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="mask mask-heart w-24 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/distracted3@192.webp" alt="Heart avatar" /></div></x-daisyui::avatar>
</div>

## Avatar group

```html
<x-daisyui::avatar group class="-space-x-6">
    <x-daisyui::avatar><div class="w-12"><img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-12"><img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-12"><img src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp" alt="Avatar three" /></div></x-daisyui::avatar>
</x-daisyui::avatar>
```

<div class="component-preview">
    <x-daisyui::avatar group class="-space-x-6">
        <x-daisyui::avatar><div class="w-12 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" /></div></x-daisyui::avatar>
        <x-daisyui::avatar><div class="w-12 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" /></div></x-daisyui::avatar>
        <x-daisyui::avatar><div class="w-12 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/wonderperson@192.webp" alt="Avatar three" /></div></x-daisyui::avatar>
    </x-daisyui::avatar>
</div>

## Avatar group with counter

```html
<x-daisyui::avatar group class="-space-x-6">
    <x-daisyui::avatar><div class="w-12"><img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" /></div></x-daisyui::avatar>
    <x-daisyui::avatar><div class="w-12"><img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" /></div></x-daisyui::avatar>
    <x-daisyui::avatar placeholder><div class="w-12 bg-neutral text-neutral-content"><span>+99</span></div></x-daisyui::avatar>
</x-daisyui::avatar>
```

<div class="component-preview">
    <x-daisyui::avatar group class="-space-x-6">
        <x-daisyui::avatar><div class="w-12 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Avatar one" /></div></x-daisyui::avatar>
        <x-daisyui::avatar><div class="w-12 bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Avatar two" /></div></x-daisyui::avatar>
        <x-daisyui::avatar placeholder><div class="w-12 bg-neutral text-neutral-content"><span>+99</span></div></x-daisyui::avatar>
    </x-daisyui::avatar>
</div>

## Avatar with ring and presence indicator

```html
<x-daisyui::avatar status="online">
    <div class="w-24 rounded-full ring-2 ring-primary ring-offset-2 ring-offset-base-100">
        <img src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" alt="Online avatar" />
    </div>
</x-daisyui::avatar>

<x-daisyui::avatar status="offline">
    <div class="w-24 rounded-full"><img src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp" alt="Offline avatar" /></div>
</x-daisyui::avatar>
```

<div class="component-preview flex items-center gap-6">
    <x-daisyui::avatar status="online"><div class="w-24 rounded-full bg-base-300 ring-2 ring-primary ring-offset-2 ring-offset-base-100"><img src="https://img.daisyui.com/images/profile/demo/gordon@192.webp" alt="Online avatar" /></div></x-daisyui::avatar>
    <x-daisyui::avatar status="offline"><div class="w-24 rounded-full bg-base-300"><img src="https://img.daisyui.com/images/profile/demo/idiotsandwich@192.webp" alt="Offline avatar" /></div></x-daisyui::avatar>
</div>

## Avatar placeholders

```html
<x-daisyui::avatar placeholder><div class="w-24 rounded-full bg-neutral text-neutral-content"><span class="text-3xl">D</span></div></x-daisyui::avatar>
<x-daisyui::avatar status="online" placeholder><div class="w-16 rounded-full bg-neutral text-neutral-content"><span class="text-xl">AI</span></div></x-daisyui::avatar>
<x-daisyui::avatar placeholder><div class="w-12 rounded-full bg-neutral text-neutral-content"><span>SY</span></div></x-daisyui::avatar>
```

```html
<x-daisyui::avatar placeholder><div class="w-8 rounded-full bg-neutral text-neutral-content"><span class="text-xs">UI</span></div></x-daisyui::avatar>
```

<div class="component-preview flex items-center gap-6">
    <x-daisyui::avatar placeholder><div class="w-24 rounded-full bg-neutral text-neutral-content"><span class="text-3xl">D</span></div></x-daisyui::avatar>
    <x-daisyui::avatar status="online" placeholder><div class="w-16 rounded-full bg-neutral text-neutral-content"><span class="text-xl">AI</span></div></x-daisyui::avatar>
    <x-daisyui::avatar placeholder><div class="w-12 rounded-full bg-neutral text-neutral-content"><span>SY</span></div></x-daisyui::avatar>
    <x-daisyui::avatar placeholder><div class="w-8 rounded-full bg-neutral text-neutral-content"><span class="text-xs">UI</span></div></x-daisyui::avatar>
</div>