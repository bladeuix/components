# OTP

OTP (One-Time Password) component for inputting verification codes. It's usually 4 to 6 digits long and is used for two-factor authentication (2FA) or passwordless login.

> Make sure the number of spans matches the `maxlength` and the `pattern` of the input field.

## OTP

```preview-html
<x-otp id="otp" maxlength="4" pattern="[0-9]{4}"/>
```

## OTP with 6 digits

```preview-html
<x-otp id="otp6" :length="6" maxlength="6" pattern="[0-9]{6}"/>
```

## OTP joined

Connects the character boxes together.

```preview-html
<x-otp id="otp-joined" joined maxlength="4" pattern="[0-9]{4}"/>
```

## OTP with different sizes

```preview-html
<x-otp id="otp-xs" size="xs" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-sm" size="sm" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-md" size="md" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-lg" size="lg" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-xl" size="xl" maxlength="4" pattern="[0-9]{4}"/>
```

## OTP with different colors

```preview-html
<x-otp id="otp-neutral" color="neutral" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-primary" color="primary" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-secondary" color="secondary" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-accent" color="accent" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-info" color="info" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-success" color="success" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-warning" color="warning" maxlength="4" pattern="[0-9]{4}"/>

<x-otp id="otp-error" color="error" maxlength="4" pattern="[0-9]{4}"/>
```

---

## Reference

### OTP Attributes

| Name           | Default         | Description                                                                                           |
|----------------|-----------------|-------------------------------------------------------------------------------------------------------|
| `id`           | —               | **Required.** The input `id` and `name` attribute.                                                    |
| `size`         | `null`          | Size variant: `xs`, `sm`, `md`, `lg`, or `xl`.                                                        |
| `color`        | `null`          | Color variant: `neutral`, `primary`, `secondary`, `accent`, `info`, `success`, `warning`, or `error`. |
| `joined`       | `false`         | Connects the character boxes together.                                                                |
| `length`       | `4`             | Number of digit boxes to render.                                                                      |
| `type`         | `text`          | Input type.                                                                                           |
| `autocomplete` | `one-time-code` | Autocomplete hint for OTP.                                                                            |
| `inputmode`    | `numeric`       | Numeric keyboard on mobile.                                                                           |
| `maxlength`    | —               | Maximum number of characters. Should match `length`.                                                  |
| `pattern`      | —               | Regex pattern for validation (e.g. `[0-9]{4}`).                                                       |
| `placeholder`  | —               | Placeholder text.                                                                                     |
| `disabled`     | —               | Whether the input is disabled.                                                                        |
| `readonly`     | —               | Whether the input is read-only.                                                                       |

### OTP Slot

| Name    | Default | Description                                                    |
|---------|---------|----------------------------------------------------------------|
| Default | —       | Not used. The component renders spans and an input internally. |