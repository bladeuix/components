---
title: Table
description: Table can be used to show a list of data in a table format.
group: Components
---

# Table

Table can be used to show a list of data in a table format.

```html
<x-daisyui::table>
    <x-slot:thead>
        <x-daisyui::table-head-cell />
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Job" />
        <x-daisyui::table-head-cell value="Favorite Color" />
    </x-slot:thead>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="1" />
        <x-daisyui::table-cell value="Cy Ganderton" />
        <x-daisyui::table-cell value="Quality Control Specialist" />
        <x-daisyui::table-cell value="Blue" />
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="2" />
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell value="Desktop Support Technician" />
        <x-daisyui::table-cell value="Purple" />
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Border and background

```html
<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

```html +parse
<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Custom HTML

Use `value` for plain text cells and the default slot when the cell needs richer markup.

```html
<x-daisyui::table>
    <x-slot:thead>
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Status" />
    </x-slot:thead>

    <x-daisyui::table-row>
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell>
            <div class="flex items-center gap-2">
                <x-daisyui::status color="success" />
                <span class="font-medium">Online</span>
            </div>
        </x-daisyui::table-cell>
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-cell value="Brice Swyre" />
        <x-daisyui::table-cell>
            <div class="flex items-center gap-2">
                <x-daisyui::status color="warning" />
                <span class="font-medium">Away</span>
            </div>
        </x-daisyui::table-cell>
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Status" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell>
                <div class="flex items-center gap-2">
                    <x-daisyui::status color="success" />
                    <span class="font-medium">Online</span>
                </div>
            </x-daisyui::table-cell>
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-cell value="Brice Swyre" />
            <x-daisyui::table-cell>
                <div class="flex items-center gap-2">
                    <x-daisyui::status color="warning" />
                    <span class="font-medium">Away</span>
                </div>
            </x-daisyui::table-cell>
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Active row

```html
<x-daisyui::table>
    <x-slot:thead>
        <x-daisyui::table-head-cell />
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Job" />
        <x-daisyui::table-head-cell value="Favorite Color" />
    </x-slot:thead>

    <x-daisyui::table-row class="bg-base-200">
        <x-daisyui::table-head-cell value="1" />
        <x-daisyui::table-cell value="Cy Ganderton" />
        <x-daisyui::table-cell value="Quality Control Specialist" />
        <x-daisyui::table-cell value="Blue" />
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="2" />
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell value="Desktop Support Technician" />
        <x-daisyui::table-cell value="Purple" />
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row class="bg-base-200">
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Hover row

```html
<x-daisyui::table>
    <x-slot:thead>
        <x-daisyui::table-head-cell />
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Job" />
        <x-daisyui::table-head-cell value="Favorite Color" />
    </x-slot:thead>

    <x-daisyui::table-row class="hover:bg-base-300">
        <x-daisyui::table-head-cell value="1" />
        <x-daisyui::table-cell value="Cy Ganderton" />
        <x-daisyui::table-cell value="Quality Control Specialist" />
        <x-daisyui::table-cell value="Blue" />
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="2" />
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell value="Desktop Support Technician" />
        <x-daisyui::table-cell value="Purple" />
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row class="hover:bg-base-300">
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Zebra

```html
<x-daisyui::table zebra>
    <x-slot:thead>
        <x-daisyui::table-head-cell />
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Job" />
        <x-daisyui::table-head-cell value="Favorite Color" />
    </x-slot:thead>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="1" />
        <x-daisyui::table-cell value="Cy Ganderton" />
        <x-daisyui::table-cell value="Quality Control Specialist" />
        <x-daisyui::table-cell value="Blue" />
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell value="2" />
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell value="Desktop Support Technician" />
        <x-daisyui::table-cell value="Purple" />
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table zebra>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Favorite Color" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Blue" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Purple" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Checkbox

```html
<x-daisyui::table>
    <x-slot:thead>
        <x-daisyui::table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="select-all" aria-label="Select all rows" />
            </label>
        </x-daisyui::table-head-cell>
        <x-daisyui::table-head-cell value="Name" />
        <x-daisyui::table-head-cell value="Role" />
    </x-slot:thead>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="selected_rows[]" value="hart-hagerty" aria-label="Select Hart Hagerty" />
            </label>
        </x-daisyui::table-head-cell>
        <x-daisyui::table-cell value="Hart Hagerty" />
        <x-daisyui::table-cell value="Support" />
    </x-daisyui::table-row>

    <x-daisyui::table-row>
        <x-daisyui::table-head-cell>
            <label>
                <input type="checkbox" class="checkbox" name="selected_rows[]" value="brice-swyre" aria-label="Select Brice Swyre" />
            </label>
        </x-daisyui::table-head-cell>
        <x-daisyui::table-cell value="Brice Swyre" />
        <x-daisyui::table-cell value="Finance" />
    </x-daisyui::table-row>
</x-daisyui::table>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table>
        <x-slot:thead>
            <x-daisyui::table-head-cell>
                <label>
                    <input type="checkbox" class="checkbox" name="select-all" aria-label="Select all rows" />
                </label>
            </x-daisyui::table-head-cell>
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Role" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell>
                <label>
                    <input type="checkbox" class="checkbox" name="selected_rows[]" value="hart-hagerty" aria-label="Select Hart Hagerty" />
                </label>
            </x-daisyui::table-head-cell>
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Support" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell>
                <label>
                    <input type="checkbox" class="checkbox" name="selected_rows[]" value="brice-swyre" aria-label="Select Brice Swyre" />
                </label>
            </x-daisyui::table-head-cell>
            <x-daisyui::table-cell value="Brice Swyre" />
            <x-daisyui::table-cell value="Finance" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Sizes

```html
<div class="overflow-x-auto">
    <x-daisyui::table size="xs">
        <x-slot:thead>
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Support Technician" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

```html +parse
<div class="overflow-x-auto">
    <x-daisyui::table size="xs">
        <x-slot:thead>
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Job" />
            <x-daisyui::table-head-cell value="Company" />
        </x-slot:thead>
        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy Ganderton" />
            <x-daisyui::table-cell value="Quality Control Specialist" />
            <x-daisyui::table-cell value="Littel, Schaden and Vandervort" />
        </x-daisyui::table-row>
        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart Hagerty" />
            <x-daisyui::table-cell value="Desktop Support Technician" />
            <x-daisyui::table-cell value="Zemlak, Daniel and Leannon" />
        </x-daisyui::table-row>
    </x-daisyui::table>
</div>
```

## Pinned rows and cols

```html
<div class="overflow-x-auto h-96 w-96">
    <x-daisyui::table size="xs" pin-rows pin-cols>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Team" />
            <x-daisyui::table-head-cell value="Role" />
            <x-daisyui::table-head-cell value="City" />
            <x-daisyui::table-head-cell value="Last" />
            <x-daisyui::table-head-cell value="Fav" />
            <x-daisyui::table-head-cell value="Lvl" />
            <x-daisyui::table-head-cell />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Cy" />
            <x-daisyui::table-cell value="QA" />
            <x-daisyui::table-cell value="QC" />
            <x-daisyui::table-cell value="CA" />
            <x-daisyui::table-cell value="12/16" />
            <x-daisyui::table-cell value="Blu" />
            <x-daisyui::table-cell value="L2" />
            <x-daisyui::table-head-cell value="1" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Hart" />
            <x-daisyui::table-cell value="IT" />
            <x-daisyui::table-cell value="DST" />
            <x-daisyui::table-cell value="US" />
            <x-daisyui::table-cell value="12/05" />
            <x-daisyui::table-cell value="Pur" />
            <x-daisyui::table-cell value="L3" />
            <x-daisyui::table-head-cell value="2" />
        </x-daisyui::table-row>

        <x-slot:tfoot>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Team" />
            <x-daisyui::table-head-cell value="Role" />
            <x-daisyui::table-head-cell value="City" />
            <x-daisyui::table-head-cell value="Last" />
            <x-daisyui::table-head-cell value="Fav" />
            <x-daisyui::table-head-cell value="Lvl" />
            <x-daisyui::table-head-cell />
        </x-slot:tfoot>
    </x-daisyui::table>
</div>
```

```html +parse
<div class="overflow-x-auto h-96 w-96">
    <x-daisyui::table size="xs" pin-rows pin-cols>
        <x-slot:thead>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Team" />
            <x-daisyui::table-head-cell value="Role" />
            <x-daisyui::table-head-cell value="City" />
            <x-daisyui::table-head-cell value="Last" />
            <x-daisyui::table-head-cell value="Fav" />
            <x-daisyui::table-head-cell value="Lvl" />
            <x-daisyui::table-head-cell />
        </x-slot:thead>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="1" />
            <x-daisyui::table-cell value="Njogu Amos" />
            <x-daisyui::table-cell value="QA" />
            <x-daisyui::table-cell value="QC" />
            <x-daisyui::table-cell value="CA" />
            <x-daisyui::table-cell value="12/16" />
            <x-daisyui::table-cell value="Blu" />
            <x-daisyui::table-cell value="L2" />
            <x-daisyui::table-head-cell value="1" />
        </x-daisyui::table-row>

        <x-daisyui::table-row>
            <x-daisyui::table-head-cell value="2" />
            <x-daisyui::table-cell value="Otieno Jackson" />
            <x-daisyui::table-cell value="IT" />
            <x-daisyui::table-cell value="DST" />
            <x-daisyui::table-cell value="US" />
            <x-daisyui::table-cell value="12/05" />
            <x-daisyui::table-cell value="Pur" />
            <x-daisyui::table-cell value="L3" />
            <x-daisyui::table-head-cell value="2" />
        </x-daisyui::table-row>

        <x-slot:tfoot>
            <x-daisyui::table-head-cell />
            <x-daisyui::table-head-cell value="Name" />
            <x-daisyui::table-head-cell value="Team" />
            <x-daisyui::table-head-cell value="Role" />
            <x-daisyui::table-head-cell value="City" />
            <x-daisyui::table-head-cell value="Last" />
            <x-daisyui::table-head-cell value="Fav" />
            <x-daisyui::table-head-cell value="Lvl" />
            <x-daisyui::table-head-cell />
        </x-slot:tfoot>
    </x-daisyui::table>
</div>
```
