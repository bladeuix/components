# Table

Table can be used to show a list of data in a table format.

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Favorite Color"/>
    </x-slot:thead>

    <x-table-row>
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Blue"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Purple"/>
    </x-table-row>
</x-table>
```

## Border and background

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Favorite Color"/>
    </x-slot:thead>

    <x-table-row>
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Blue"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Purple"/>
    </x-table-row>
</x-table>
```

## Custom HTML

Use `value` for plain text cells and the default slot when the cell needs richer markup.

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Status"/>
    </x-slot:thead>

    <x-table-row>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell>
            <div class="flex items-center gap-2">
                <x-status color="success"/>
                <span class="font-medium">Online</span>
            </div>
        </x-table-cell>
    </x-table-row>

    <x-table-row>
        <x-table-cell value="Brice Swyre"/>
        <x-table-cell>
            <div class="flex items-center gap-2">
                <x-status color="warning"/>
                <span class="font-medium">Away</span>
            </div>
        </x-table-cell>
    </x-table-row>
</x-table>
```

## Active row

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Favorite Color"/>
    </x-slot:thead>

    <x-table-row class="bg-base-200">
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Blue"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Purple"/>
    </x-table-row>
</x-table>
```

## Hover row

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Favorite Color"/>
    </x-slot:thead>

    <x-table-row class="hover:bg-base-300">
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Blue"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Purple"/>
    </x-table-row>
</x-table>
```

## Zebra

```preview-html
<x-table zebra>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Favorite Color"/>
    </x-slot:thead>

    <x-table-row>
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Blue"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Purple"/>
    </x-table-row>
</x-table>
```

## Checkbox

```preview-html
<x-table>
    <x-slot:thead>
        <x-table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="select-all" aria-label="Select all rows"/>
            </label>
        </x-table-head-cell>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Role"/>
    </x-slot:thead>

    <x-table-row>
        <x-table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="selected_rows[]" value="hart-hagerty" aria-label="Select Hart Hagerty"/>
            </label>
        </x-table-head-cell>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Support"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="selected_rows[]" value="brice-swyre" aria-label="Select Brice Swyre"/>
            </label>
        </x-table-head-cell>
        <x-table-cell value="Brice Swyre"/>
        <x-table-cell value="Finance"/>
    </x-table-row>
</x-table>
```

## Sizes

```preview-html
<x-table size="xs">
    <x-slot:thead>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Job"/>
        <x-table-head-cell value="Company"/>
    </x-slot:thead>
    <x-table-row>
        <x-table-head-cell value="1"/>
        <x-table-cell value="Cy Ganderton"/>
        <x-table-cell value="Quality Control Specialist"/>
        <x-table-cell value="Littel, Schaden and Vandervort"/>
    </x-table-row>
    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Hart Hagerty"/>
        <x-table-cell value="Desktop Support Technician"/>
        <x-table-cell value="Zemlak, Daniel and Leannon"/>
    </x-table-row>
</x-table>
```

## Pinned rows and cols

```preview-html
<x-table size="xs" pin-rows pin-cols>
    <x-slot:thead>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Team"/>
        <x-table-head-cell value="Role"/>
        <x-table-head-cell value="City"/>
        <x-table-head-cell value="Last"/>
        <x-table-head-cell value="Fav"/>
        <x-table-head-cell value="Lvl"/>
        <x-table-head-cell/>
    </x-slot:thead>

    <x-table-row>
        <x-table-head-cell value="1"/>
        <x-table-cell value="Njogu Amos"/>
        <x-table-cell value="QA"/>
        <x-table-cell value="QC"/>
        <x-table-cell value="CA"/>
        <x-table-cell value="12/16"/>
        <x-table-cell value="Blu"/>
        <x-table-cell value="L2"/>
        <x-table-head-cell value="1"/>
    </x-table-row>

    <x-table-row>
        <x-table-head-cell value="2"/>
        <x-table-cell value="Otieno Jackson"/>
        <x-table-cell value="IT"/>
        <x-table-cell value="DST"/>
        <x-table-cell value="US"/>
        <x-table-cell value="12/05"/>
        <x-table-cell value="Pur"/>
        <x-table-cell value="L3"/>
        <x-table-head-cell value="2"/>
    </x-table-row>

    <x-slot:tfoot>
        <x-table-head-cell/>
        <x-table-head-cell value="Name"/>
        <x-table-head-cell value="Team"/>
        <x-table-head-cell value="Role"/>
        <x-table-head-cell value="City"/>
        <x-table-head-cell value="Last"/>
        <x-table-head-cell value="Fav"/>
        <x-table-head-cell value="Lvl"/>
        <x-table-head-cell/>
    </x-slot:tfoot>
</x-table>
```

---

## Reference

### Table Attributes

| Name | Default | Description |
|---|---|---|
| `size` | `null` | The table size: `xs`, `sm`, `md`, `lg`, or `xl`. |
| `zebra` | `false` | Applies zebra striping to rows. |
| `pin-rows` | `false` | Pins the header and footer rows. |
| `pin-cols` | `false` | Pins the first column. |

### Table Slots

| Name | Default | Description |
|---|---|---|
| Default | Empty | The `TableRow` components for the table body. |
| `thead` | Empty | Table head content, wrapped in ` <thead> <tr> `. |
| `tfoot` | Empty | Table footer content, wrapped in ` <tfoot> <tr> `. |

### TableRow Slot

| Name | Default | Description |
|---|---|---|
| Default | Empty | The cell components for the row. |

### TableCell Attributes

| Name | Default | Description |
|---|---|---|
| `value` | `null` | Plain text content. If set, overrides the default slot. |

### TableCell Slot

| Name | Default | Description |
|---|---|---|
| Default | Empty | Rich HTML content, used when `value` is not set. |

### TableHeadCell Attributes

| Name | Default | Description |
|---|---|---|
| `value` | `null` | Plain text content. If set, overrides the default slot. |

### TableHeadCell Slot

| Name | Default | Description |
|---|---|---|
| Default | Empty | Rich HTML content, used when `value` is not set. |
