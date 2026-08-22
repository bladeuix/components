# Tabs

Tabs show a list of links or radio controls in a tabbed format.

> Remember to give every tab in a group the same unique `name`;

## Lift tabs

```html
<x-daisyui::tabs style="lift" class="w-full">
    <x-daisyui::tab name="lift-tabs" label="Profile" active class="border-base-300 bg-base-100 p-6">Profile content</x-daisyui::tab>

    <x-daisyui::tab name="lift-tabs" label="Notifications" class="border-base-300 bg-base-100 p-6">Notification content</x-daisyui::tab>

    <x-daisyui::tab name="lift-tabs" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="lift" class="w-full">
        <x-daisyui::tab name="lift-tabs" label="Profile" active class="border-base-300 bg-base-100 p-6">Profile content</x-daisyui::tab>
        <x-daisyui::tab name="lift-tabs" label="Notifications" class="border-base-300 bg-base-100 p-6">Notification content</x-daisyui::tab>
        <x-daisyui::tab name="lift-tabs" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Box tabs

```html
<x-daisyui::tabs style="box" class="w-full">
    <x-daisyui::tab name="box-tabs" label="Files" active class="border-base-300 bg-base-100 p-6">Files content</x-daisyui::tab>

    <x-daisyui::tab name="box-tabs" label="Shared" class="border-base-300 bg-base-100 p-6">Shared content</x-daisyui::tab>

    <x-daisyui::tab name="box-tabs" label="Trash" class="border-base-300 bg-base-100 p-6">Trash content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="box" class="w-full">
        <x-daisyui::tab name="box-tabs" label="Files" active class="border-base-300 bg-base-100 p-6">Files content</x-daisyui::tab>
        <x-daisyui::tab name="box-tabs" label="Shared" class="border-base-300 bg-base-100 p-6">Shared content</x-daisyui::tab>
        <x-daisyui::tab name="box-tabs" label="Trash" class="border-base-300 bg-base-100 p-6">Trash content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Border tabs

```html
<x-daisyui::tabs style="border" class="w-full">
    <x-daisyui::tab name="border-tabs" label="Overview" active class="border-base-300 bg-base-100 p-6">Overview content</x-daisyui::tab>

    <x-daisyui::tab name="border-tabs" label="Activity" class="border-base-300 bg-base-100 p-6">Activity content</x-daisyui::tab>

    <x-daisyui::tab name="border-tabs" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="border" class="w-full">
        <x-daisyui::tab name="border-tabs" label="Overview" active class="border-base-300 bg-base-100 p-6">Overview content</x-daisyui::tab>
        <x-daisyui::tab name="border-tabs" label="Activity" class="border-base-300 bg-base-100 p-6">Activity content</x-daisyui::tab>
        <x-daisyui::tab name="border-tabs" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Link tabs

> Without `href`, Tab renders a radio input with the required `label` as visible text.

```html
<x-daisyui::tabs style="lift" class="w-full">
    <x-daisyui::tab name="link-tabs" href="#overview" label="Overview" active class="border-base-300 bg-base-100 p-6">Overview content</x-daisyui::tab>

    <x-daisyui::tab name="link-tabs" href="#activity" label="Activity" class="border-base-300 bg-base-100 p-6">Activity content</x-daisyui::tab>

    <x-daisyui::tab name="link-tabs" href="#settings" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="lift" class="w-full">
        <x-daisyui::tab name="link-tabs" href="#overview" label="Overview" active class="border-base-300 bg-base-100 p-6">Overview content</x-daisyui::tab>
        <x-daisyui::tab name="link-tabs" href="#activity" label="Activity" class="border-base-300 bg-base-100 p-6">Activity content</x-daisyui::tab>
        <x-daisyui::tab name="link-tabs" href="#settings" label="Settings" class="border-base-300 bg-base-100 p-6">Settings content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Tabs with icons

Use the named `icon` slot for each tab icon. The default slot remains the adjacent tab content panel.

```html
<x-daisyui::tabs style="lift" class="w-full">
    <x-daisyui::tab name="media-tabs" label="Live" class="border-base-300 bg-base-100 p-6">
        <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" /></svg></x-slot:icon>
        Live content
    </x-daisyui::tab>

    <x-daisyui::tab name="media-tabs" label="Laugh" active class="border-base-300 bg-base-100 p-6">
        <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" /></svg></x-slot:icon>
        Laugh content
    </x-daisyui::tab>

    <x-daisyui::tab name="media-tabs" label="Love" class="border-base-300 bg-base-100 p-6">
        <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg></x-slot:icon>
        Love content
    </x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="lift" class="w-full">
        <x-daisyui::tab name="media-tabs" label="Live" class="border-base-300 bg-base-100 p-6">
            <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" /></svg></x-slot:icon>
            Live content
        </x-daisyui::tab>
        <x-daisyui::tab name="media-tabs" label="Laugh" active class="border-base-300 bg-base-100 p-6">
            <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" /></svg></x-slot:icon>
            Laugh content
        </x-daisyui::tab>
        <x-daisyui::tab name="media-tabs" label="Love" class="border-base-300 bg-base-100 p-6">
            <x-slot:icon><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 me-2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg></x-slot:icon>
            Love content
        </x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Sizes

```html
<x-daisyui::tabs style="lift" size="xs" class="w-full">
    <x-daisyui::tab name="extra-small-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
    <x-daisyui::tab name="extra-small-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
    <x-daisyui::tab name="extra-small-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
</x-daisyui::tabs>

{... omitting verbosity ...}

<x-daisyui::tabs style="lift" size="xl" class="w-full">
    <x-daisyui::tab name="extra-large-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
    <x-daisyui::tab name="extra-large-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
    <x-daisyui::tab name="extra-large-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="lift" size="xs" class="w-full">
        <x-daisyui::tab name="extra-small-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="extra-small-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="extra-small-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>

    <x-daisyui::tabs style="lift" size="sm" class="w-full">
        <x-daisyui::tab name="small-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="small-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="small-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>

    <x-daisyui::tabs style="lift" size="md" class="w-full">
        <x-daisyui::tab name="medium-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="medium-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="medium-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>

    <x-daisyui::tabs style="lift" size="lg" class="w-full">
        <x-daisyui::tab name="large-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="large-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="large-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>

    <x-daisyui::tabs style="lift" size="xl" class="w-full">
        <x-daisyui::tab name="extra-large-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="extra-large-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="extra-large-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Placement

```html
<x-daisyui::tabs style="lift" placement="top" class="w-full">
    <x-daisyui::tab name="top-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
    <x-daisyui::tab name="top-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
    <x-daisyui::tab name="top-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
</x-daisyui::tabs>

<x-daisyui::tabs style="lift" placement="bottom" class="w-full">
    <x-daisyui::tab name="bottom-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
    <x-daisyui::tab name="bottom-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
    <x-daisyui::tab name="bottom-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="lift" placement="top" class="w-full">
        <x-daisyui::tab name="top-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="top-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="top-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>

    <x-daisyui::tabs style="lift" placement="bottom" class="w-full">
        <x-daisyui::tab name="bottom-tabs" label="First" active class="border-base-300 bg-base-100 p-6">First content</x-daisyui::tab>
        <x-daisyui::tab name="bottom-tabs" label="Second" class="border-base-300 bg-base-100 p-6">Second content</x-daisyui::tab>
        <x-daisyui::tab name="bottom-tabs" label="Third" class="border-base-300 bg-base-100 p-6">Third content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>

## Disabled tab

```html
<x-daisyui::tabs style="box" class="w-full">
    <x-daisyui::tab name="disabled-tabs" label="Available" class="border-base-300 bg-base-100 p-6">Available content</x-daisyui::tab>
    <x-daisyui::tab name="disabled-tabs" label="Disabled" disabled class="border-base-300 bg-base-100 p-6">Disabled content</x-daisyui::tab>
    <x-daisyui::tab name="disabled-tabs" label="Active" active class="border-base-300 bg-base-100 p-6">Active content</x-daisyui::tab>
</x-daisyui::tabs>
```

<div class="component-preview">
    <x-daisyui::tabs style="box" class="w-full">
        <x-daisyui::tab name="disabled-tabs" label="Available" class="border-base-300 bg-base-100 p-6">Available content</x-daisyui::tab>
        <x-daisyui::tab name="disabled-tabs" label="Disabled" disabled class="border-base-300 bg-base-100 p-6">Disabled content</x-daisyui::tab>
        <x-daisyui::tab name="disabled-tabs" label="Active" active class="border-base-300 bg-base-100 p-6">Active content</x-daisyui::tab>
    </x-daisyui::tabs>
</div>