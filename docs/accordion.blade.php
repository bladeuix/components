# Accordion

Accordion displays an expandable/collapsible content section.

```html
<x-accordion title="How do I create an account?">
    Click the "Sign Up" button in the top right corner and follow the registration process.
</x-accordion>
```

<div class="component-preview">
    <x-accordion title="How do I create an account?">
        Click the "Sign Up" button in the top right corner and follow the registration process.
    </x-accordion>
</div>


## Title Slot

```html
<x-accordion name="my-accordion">
    <x-slot:title>
        <div class="font-semibold">I forgot my password. What should I do?</div>
    </x-slot:title>
    Click on "Forgot Password" on the login page and follow the instructions sent to your email.
</x-accordion>
```

<div class="component-preview">
    <x-accordion name="my-accordion">
        <x-slot:title>
            <div class="font-semibold">I forgot my password. What should I do?</div>
        </x-slot:title>
        Click on "Forgot Password" on the login page and follow the instructions sent to your email.
    </x-accordion>
</div>


## Grouped

```html
<x-accordion name="faq-accordion" title="How do I create an account?">
    Click the "Sign Up" button in the top right corner and follow the registration process.
</x-accordion>
<x-accordion name="faq-accordion" title="I forgot my password. What should I do?">
    Click on "Forgot Password" on the login page and follow the instructions sent to your email.
</x-accordion>
```

```html
<x-accordion name="faq-accordion" title="How do I update my profile information?">
    Go to "My Account" settings and select "Edit Profile" to make changes.
</x-accordion>
```

<div class="component-preview">
    <x-accordion name="faq-accordion" title="How do I create an account?">
        Click the "Sign Up" button in the top right corner and follow the registration process.
    </x-accordion>
    <x-accordion name="faq-accordion" title="I forgot my password. What should I do?">
        Click on "Forgot Password" on the login page and follow the instructions sent to your email.
    </x-accordion>
    <x-accordion name="faq-accordion" title="How do I update my profile information?">
        Go to "My Account" settings and select "Edit Profile" to make changes.
    </x-accordion>
</div>


## Border Default

```html
<x-accordion title="Bordered accordion">
    This accordion uses the default border and background classes.
</x-accordion>
```

<div class="component-preview">
    <x-accordion title="Bordered accordion">
        This accordion uses the default border and background classes.
    </x-accordion>
</div>


## Border Without

```html
<x-accordion :border="false" title="Borderless accordion">
    This accordion removes the default border and background classes.
</x-accordion>
```

<div class="component-preview">
    <x-accordion :border="false" title="Borderless accordion">
        This accordion removes the default border and background classes.
    </x-accordion>
</div>


## Border Custom

```html
<x-accordion
        :border="false" 
        class="border border-primary bg-base-200" 
        title="Custom styled accordion"
>
    This accordion uses custom border and background utilities.
</x-accordion>
```

<div class="component-preview">
    <x-accordion :border="false" class="border border-primary bg-base-200" title="Custom styled accordion">
        This accordion uses custom border and background utilities.
    </x-accordion>
</div>


## Icon Variants Arrow Icon

```html
<x-accordion icon="arrow" title="With Arrow Icon">
    This accordion has an arrow icon.
</x-accordion>
```

<div class="component-preview">
    <x-accordion icon="arrow" title="With Arrow Icon">
        This accordion has an arrow icon.
    </x-accordion>
</div>


## Icon Variants Plus Icon

```html
<x-accordion icon="plus" title="With Plus Icon">
    This accordion has a plus icon.
</x-accordion>
```

<div class="component-preview">
    <x-accordion icon="plus" title="With Plus Icon">
        This accordion has a plus icon.
    </x-accordion>
</div>


## Open State Forced Open

```html
<x-accordion open title="This is forced open">
    This accordion is open by default.
</x-accordion>
```

<div class="component-preview">
    <x-accordion open title="This is forced open">
        This accordion is open by default.
    </x-accordion>
</div>


## Open State Closed By Default

```html
<x-accordion title="Closed by default">
    This accordion uses the default interactive state with no forced modifier.
</x-accordion>
```

<div class="component-preview">
    <x-accordion title="Closed by default">
        This accordion uses the default interactive state with no forced modifier.
    </x-accordion>
</div>


## Open State Forced Close

```html
<x-accordion :open="false" title="Forced close">
    This accordion uses the `collapse-close` modifier.
</x-accordion>
```

<div class="component-preview">
    <x-accordion :open="false" title="Forced close">
        This accordion uses the `collapse-close` modifier.
    </x-accordion>
</div>


## Advance

```html
<x-accordion
    name="advance-accordion" 
    icon="arrow" 
    open 
    class="w-full"
    id="accordion-1"
    aria-label="Advance accordion example"
>
    <x-slot:title>
        <div class="font-semibold">Click to expand</div>
    </x-slot:title>

    <div class="space-y-3">
        <p>This is advance usage with custom attributes and HTML content.</p>

        <ul class="list-disc pl-5">
            <li>Custom heading content</li>
            <li>Rich body markup</li>
            <li>Merged HTML attributes</li>
        </ul>

        <x-button size="sm" color="primary">Take action</x-button>
    </div>
</x-accordion>
```

<div class="component-preview">
    <x-accordion
        name="advance-accordion" 
        icon="arrow" 
        open 
        class="w-full"
        id="accordion-1"
        aria-label="Advance accordion example"
    >
        <x-slot:title>
            <div class="font-semibold">Click to expand</div>
        </x-slot:title>

        <div class="space-y-3">
            <p>This is advance usage with custom attributes and HTML content.</p>

            <ul class="list-disc pl-5">
                <li>Custom heading content</li>
                <li>Rich body markup</li>
                <li>Merged HTML attributes</li>
            </ul>

            <x-button size="sm" color="primary">Take action</x-button>
        </div>
    </x-accordion>
</div>
