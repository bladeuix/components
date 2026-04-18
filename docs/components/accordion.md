---
title: Accordion
description: Accordion displays an expandable/collapsible content section.
group: Components
---

# Accordion

Accordion displays an expandable/collapsible content section.

```html
<x-daisyui::accordion title="How do I create an account?">
    Click the "Sign Up" button in the top right corner and follow the registration process.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion title="How do I create an account?">
        Click the "Sign Up" button in the top right corner and follow the registration process.
    </x-daisyui::accordion>
</div>
```

## Title Slot

```html
<x-daisyui::accordion name="my-accordion">
    <x-slot:title>
        <div class="font-semibold">I forgot my password. What should I do?</div>
    </x-slot:title>
    Click on "Forgot Password" on the login page and follow the instructions sent to your email.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion name="my-accordion">
        <x-slot:title>
            <div class="font-semibold">I forgot my password. What should I do?</div>
        </x-slot:title>
        Click on "Forgot Password" on the login page and follow the instructions sent to your email.
    </x-daisyui::accordion>
</div>
```

## Grouped

```html
<x-daisyui::accordion name="faq-accordion" title="How do I create an account?">
    Click the "Sign Up" button in the top right corner and follow the registration process.
</x-daisyui::accordion>
<x-daisyui::accordion name="faq-accordion" title="I forgot my password. What should I do?">
    Click on "Forgot Password" on the login page and follow the instructions sent to your email.
</x-daisyui::accordion>
<x-daisyui::accordion name="faq-accordion" title="How do I update my profile information?">
    Go to "My Account" settings and select "Edit Profile" to make changes.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion name="faq-accordion" title="How do I create an account?">
        Click the "Sign Up" button in the top right corner and follow the registration process.
    </x-daisyui::accordion>
    <x-daisyui::accordion name="faq-accordion" title="I forgot my password. What should I do?">
        Click on "Forgot Password" on the login page and follow the instructions sent to your email.
    </x-daisyui::accordion>
    <x-daisyui::accordion name="faq-accordion" title="How do I update my profile information?">
        Go to "My Account" settings and select "Edit Profile" to make changes.
    </x-daisyui::accordion>
</div>
```

## Icon Variants

### Arrow Icon

```html
<x-daisyui::accordion icon="arrow" title="With Arrow Icon">
    This accordion has an arrow icon.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion icon="arrow" title="With Arrow Icon">
        This accordion has an arrow icon.
    </x-daisyui::accordion>
</div>
```

### Plus Icon

```html
<x-daisyui::accordion icon="plus" title="With Plus Icon">
    This accordion has a plus icon.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion icon="plus" title="With Plus Icon">
        This accordion has a plus icon.
    </x-daisyui::accordion>
</div>
```

## State Variants

### Forced Open

```html
<x-daisyui::accordion open title="This is forced open">
    This accordion is open by default.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion open title="This is forced open">
        This accordion is open by default.
    </x-daisyui::accordion>
</div>
```

### Forced Closed

```html
<x-daisyui::accordion state="close" title="This is forced closed">
    This accordion is always closed.
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion state="close" title="This is forced closed">
        This accordion is always closed.
    </x-daisyui::accordion>
</div>
```

## Advance

```html
<x-daisyui::accordion 
    name="advance-accordion" 
    icon="arrow" 
    open 
    class="w-full"
    id="accordion-1"
    aria-label="Advanced accordion example"
>
    <x-slot:title>
        <div class="font-semibold">Click to expand</div>
    </x-slot:title>

    <div class="space-y-3">
        <p>This is advanced usage with custom attributes and HTML content.</p>

        <ul class="list-disc pl-5">
            <li>Custom heading content</li>
            <li>Rich body markup</li>
            <li>Merged HTML attributes</li>
        </ul>

        <x-daisyui::button size="sm" color="primary">Take action</x-daisyui::button>
    </div>
</x-daisyui::accordion>
```

```html +parse
<div class="component-preview">
    <x-daisyui::accordion 
        name="advance-accordion" 
        icon="arrow" 
        open 
        class="w-full"
        id="accordion-1"
        aria-label="Advanced accordion example"
    >
        <x-slot:title>
            <div class="font-semibold">Click to expand</div>
        </x-slot:title>

        <div class="space-y-3">
            <p>This is advanced usage with custom attributes and HTML content.</p>

            <ul class="list-disc pl-5">
                <li>Custom heading content</li>
                <li>Rich body markup</li>
                <li>Merged HTML attributes</li>
            </ul>

            <x-daisyui::button size="sm" color="primary">Take action</x-daisyui::button>
        </div>
    </x-daisyui::accordion>
</div>
```
