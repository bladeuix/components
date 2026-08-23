# Radio

Radio buttons allow the user to select one option from a set.

> Each set of radio inputs should have a unique `name` attribute to avoid conflicts with other sets of radio inputs on the same page.
> The `name` is required and is also used as the radio input's `id`.

```preview-html
<x-radio name="radio" checked/>
<x-radio name="radio"/>
```

## Radio sizes

```preview-html
<x-radio name="radio-sizes" size="xs" checked/>
<x-radio name="radio-sizes" size="sm"/>
<x-radio name="radio-sizes" size="md"/>
<x-radio name="radio-sizes" size="lg"/>
<x-radio name="radio-sizes" size="xl"/>
```

## Colors

```preview-html
<x-radio name="radio-neutral" color="neutral" checked/>
<x-radio name="radio-primary" color="primary" checked/>
<x-radio name="radio-secondary" color="secondary" checked/>
<x-radio name="radio-accent" color="accent" checked/>
<x-radio name="radio-success" color="success" checked/>
<x-radio name="radio-warning" color="warning" checked/>
<x-radio name="radio-info" color="info" checked/>
<x-radio name="radio-error" color="error" checked/>
```

## Disabled

```preview-html
<x-radio name="radio-disabled" checked disabled/>
<x-radio name="radio-disabled" disabled/>
```

## Radio with custom colors

```preview-html
<x-radio name="radio-custom" checked class="border-red-300 bg-red-100 checked:border-red-600 checked:bg-red-200 checked:text-red-600"/>
<x-radio name="radio-custom" class="border-blue-300 bg-blue-100 checked:border-blue-600 checked:bg-blue-200 checked:text-blue-600"/>
```

---

## Reference

### Radio Attributes

| Name | Default | Description |
|---|---|---|
| `name` | *Required* | The radio group name and input `id`. |
| `size` | `null` | The radio size: `xs`, `sm`, `md`, `lg`, or `xl`. |
| `color` | `null` | The radio color: `neutral`, `primary`, `secondary`, `accent`, `info`, `success`, `warning`, or `error`. |
