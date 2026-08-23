# Accordion

Accordion displays an expandable/collapsible content section.

```preview-html
<x-accordion title="How do I create an account?">
    <p>Click the "Sign Up" button in the top right corner and follow the registration process.</p>
</x-accordion>
```

## Title Slot

```preview-html
<x-accordion name="my-accordion">
    <x-slot:title>
        <div class="font-semibold">I forgot my password. What should I do?</div>
    </x-slot:title>
    <p>Click on "Forgot Password" on the login page and follow the instructions sent to your email.</p>
</x-accordion>
```

## Grouped

```preview-html
<x-accordion name="faq-accordion" title="How do I create an account?">
    <p>Click the "Sign Up" button in the top right corner and follow the registration process.</p>
</x-accordion>
<x-accordion name="faq-accordion" title="I forgot my password. What should I do?">
    <p>Click on "Forgot Password" on the login page and follow the instructions sent to your email.</p>
</x-accordion>
<x-accordion name="faq-accordion" title="How do I update my profile information?">
    <p>Go to "My Account" settings and select "Edit Profile" to make changes.</p>
</x-accordion>
```

## Border Default

```preview-html
<x-accordion title="Bordered accordion">
    <p>This accordion uses the default border and background classes.</p>
</x-accordion>
```

## Border Without

```preview-html
<x-accordion :border="false" title="Borderless accordion">
    <p>This accordion removes the default border and background classes.</p>
</x-accordion>
```

## Border Custom

```preview-html
<x-accordion :border="false" class="border border-primary bg-base-200" title="Custom styled accordion">
    <p>This accordion uses custom border and background utilities.</p>
</x-accordion>
```

## Icon Variants Arrow Icon

```preview-html
<x-accordion icon="arrow" title="With Arrow Icon">
    <p>This accordion has an arrow icon.</p>
</x-accordion>
```

## Icon Variants Plus Icon

```preview-html
<x-accordion icon="plus" title="With Plus Icon">
    <p>This accordion has a plus icon.</p>
</x-accordion>
```

## Open State Forced Open

```preview-html
<x-accordion open title="This is forced open">
    <p>This accordion is open by default.</p>
</x-accordion>
```

## Open State Closed By Default

```preview-html
<x-accordion title="Closed by default">
    <p>This accordion uses the default interactive state with no forced modifier.</p>
</x-accordion>
```

## Open State Forced Close

```preview-html
<x-accordion :open="false" title="Forced close">
    <p>This accordion uses the <code>collapse-close</code> modifier.</p>
</x-accordion>
```

## Advance

```preview-html
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

---

## Reference

### Accordion Attributes

| Name | Default | Description |
| --- | --- | --- |
| `name` | `null` | The `name` attribute for grouping accordions. |
| `title` | `null` | The text displayed in the collapse summary. |
| `icon` | `null` | The icon style: `arrow` or `plus` . |
| `open` | `null` | Forces the accordion open or closed: `true` or `false` . |
| `border` | `true` | Shows the default border and background classes. |

### Accordion Slots

| Name | Default | Description |
| --- | --- | --- |
| Default | Empty | The collapsible content displayed below the summary. |
| `title` | Empty | HTML content for the summary, overrides the `title` attribute. |
