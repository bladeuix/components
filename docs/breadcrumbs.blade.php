# Breadcrumbs

Breadcrumbs help users navigate through the website hierarchy.

```html
<x-breadcrumbs>
    <x-breadcrumb-link href="#">Home</x-breadcrumb-link>
    <x-breadcrumb-link href="#">Documents</x-breadcrumb-link>
    <x-breadcrumb-link>Add Document</x-breadcrumb-link>
</x-breadcrumbs>
```

<div class="component-preview">
    <x-breadcrumbs>
        <x-breadcrumb-link href="#">Home</x-breadcrumb-link>
        <x-breadcrumb-link href="#">Documents</x-breadcrumb-link>
        <x-breadcrumb-link>Add Document</x-breadcrumb-link>
    </x-breadcrumbs>
</div>


## With Icons

```html
<x-breadcrumbs>
    <x-breadcrumb-link href="#">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
        Home
    </x-breadcrumb-link>
    <x-breadcrumb-link href="#">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
        Documents
    </x-breadcrumb-link>
    <x-breadcrumb-link>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        Add Document
    </x-breadcrumb-link>
</x-breadcrumbs>
```

<div class="component-preview">
    <x-breadcrumbs>
        <x-breadcrumb-link href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
            Home
        </x-breadcrumb-link>
        <x-breadcrumb-link href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
            Documents
        </x-breadcrumb-link>
        <x-breadcrumb-link>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            Add Document
        </x-breadcrumb-link>
    </x-breadcrumbs>
</div>


## With Max Width

If you set max-width or the list gets larger than the container it will scroll.

```html
<x-breadcrumbs class="max-w-xs">
    <x-breadcrumb-link href="#">Long text 1</x-breadcrumb-link>
    <x-breadcrumb-link href="#">Long text 2</x-breadcrumb-link>
    <x-breadcrumb-link href="#">Long text 3</x-breadcrumb-link>
    <x-breadcrumb-link href="#">Long text 4</x-breadcrumb-link>
    <x-breadcrumb-link>Long text 5</x-breadcrumb-link>
</x-breadcrumbs>
```

<div class="component-preview">
    <x-breadcrumbs class="max-w-xs">
        <x-breadcrumb-link href="#">Long text 1</x-breadcrumb-link>
        <x-breadcrumb-link href="#">Long text 2</x-breadcrumb-link>
        <x-breadcrumb-link href="#">Long text 3</x-breadcrumb-link>
        <x-breadcrumb-link href="#">Long text 4</x-breadcrumb-link>
        <x-breadcrumb-link>Long text 5</x-breadcrumb-link>
    </x-breadcrumbs>
</div>

---

## Reference

### Breadcrumbs Slot

| Name    | Default | Description                              |
|---------|---------|------------------------------------------|
| Default | Empty   | The `BreadcrumbLink` components to list. |

### BreadcrumbLink Attributes

| Name   | Default | Description                                                                       |
|--------|---------|-----------------------------------------------------------------------------------|
| `href` | `null`  | The link URL. When set, renders as a link; otherwise renders as the current page. |

### BreadcrumbLink Slot

| Name    | Default | Description                          |
|---------|---------|--------------------------------------|
| Default | Empty   | The link text or icon content.       |
