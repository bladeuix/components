# Carousel

Carousels show images or content in a scrollable area. Use `modifier` to control snapping and `direction` for a vertical carousel.

## Snap to start

```preview-html
<x-carousel class="rounded-box">
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp" image-alt="Carousel slide 5" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp" image-alt="Carousel slide 6" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp" image-alt="Carousel slide 7" />
</x-carousel>
```

## Snap to center

```preview-html
<x-carousel modifier="center" class="rounded-box">
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp" image-alt="Carousel slide 5" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp" image-alt="Carousel slide 6" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp" image-alt="Carousel slide 7" />
</x-carousel>
```

## Snap to end

```preview-html
<x-carousel modifier="end" class="rounded-box">
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp" image-alt="Carousel slide 5" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp" image-alt="Carousel slide 6" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp" image-alt="Carousel slide 7" />
</x-carousel>
```

## Full-width items

```preview-html
<x-carousel class="w-64 rounded-box">
    <x-carousel-item class="w-full" image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item class="w-full" image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item class="w-full" image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item class="w-full" image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
</x-carousel>
```

## Vertical carousel

```preview-html
<x-carousel direction="vertical" class="h-96 rounded-box">
    <x-carousel-item class="h-full" image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item class="h-full" image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item class="h-full" image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item class="h-full" image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
</x-carousel>
```

## Half-width items

```preview-html
<x-carousel class="w-96 rounded-box">
    <x-carousel-item class="w-1/2" image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" />
    <x-carousel-item class="w-1/2" image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" />
    <x-carousel-item class="w-1/2" image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" />
    <x-carousel-item class="w-1/2" image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" />
</x-carousel>
```

## Full-bleed carousel

```preview-html
<x-carousel modifier="center" class="max-w-md space-x-4 rounded-box bg-neutral p-4">
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" image-alt="Carousel slide 1" class="rounded-box" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" image-alt="Carousel slide 2" class="rounded-box" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" image-alt="Carousel slide 3" class="rounded-box" />
    <x-carousel-item image-src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" image-alt="Carousel slide 4" class="rounded-box" />
</x-carousel>
```

## Indicator buttons

```preview-html
<div class="alert alert-info">TODO: Figuring the best way to implement this.</div>
```

## Previous and next buttons

```preview-html
<div class="alert alert-info">TODO: Figuring the best way to implement this.</div>
```

---

## Reference

### Carousel Attributes

| Name        | Default      | Description                                       |
|-------------|--------------|---------------------------------------------------|
| `modifier`  | `start`      | The snap alignment: `start`, `center`, or `end`.  |
| `direction` | `horizontal` | The scroll direction: `horizontal` or `vertical`. |

### Carousel Slot

| Name    | Default | Description                          |
|---------|---------|--------------------------------------|
| Default | Empty   | The `CarouselItem` components.       |

### CarouselItem Attributes

| Name        | Default | Description                          |
|-------------|---------|--------------------------------------|
| `image-src` | `null`  | The URL of the carousel image.       |
| `image-alt` | `null`  | The alt text for the carousel image. |

### CarouselItem Slot

| Name    | Default | Description                                   |
|---------|---------|-----------------------------------------------|
| Default | Empty   | Additional content displayed after the image. |
