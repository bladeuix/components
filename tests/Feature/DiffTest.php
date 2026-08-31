<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Blade;

it('renders basic diff with two items', function () {
    $html = Blade::render(<<<'blade'
        <x-diff class="aspect-16/9 rounded-field">
            <x-slot:item1>
                <img alt="image 1" src="/img1.jpg" />
            </x-slot:item1>
            <x-slot:item2>
                <img alt="image 2" src="/img2.jpg" />
            </x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('class="diff aspect-16/9 rounded-field"');
    expect($html)->toContain('class="diff-item-1" role="img"');
    expect($html)->toContain('class="diff-item-2" role="img"');
    expect($html)->toContain('alt="image 1"');
    expect($html)->toContain('alt="image 2"');
    expect($html)->toContain('class="diff-resizer"');
});

it('renders with custom resizer', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
            <x-slot:resizer><div class="diff-resizer custom"></div></x-slot:resizer>
        </x-diff>
    blade);

    expect($html)->toContain('class="diff-resizer custom"');
    expect($html)->not->toContain('class="diff-resizer" role');
});

it('renders without custom resizer uses default', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('class="diff-resizer"');
});

it('renders with empty item1', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item2>Item 2</x-slot:item2>
        </x-diff>
    blade);

    expect($html)->not->toContain('diff-item-1');
    expect($html)->toContain('diff-item-2');
});

it('renders with empty item2', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item1>Item 1</x-slot:item1>
        </x-diff>
    blade);

    expect($html)->toContain('diff-item-1');
    expect($html)->not->toContain('diff-item-2');
});

it('renders with both items empty', function () {
    $html = Blade::render(<<<'blade'
        <x-diff></x-diff>
    blade);

    expect($html)->toContain('class="diff"');
    expect($html)->not->toContain('diff-item-1');
    expect($html)->not->toContain('diff-item-2');
});

it('applies additional attributes', function () {
    $html = Blade::render(<<<'blade'
        <x-diff id="my-diff" data-controller="diff">
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('id="my-diff"');
    expect($html)->toContain('data-controller="diff"');
});

it('merges custom classes', function () {
    $html = Blade::render(<<<'blade'
        <x-diff class="bordered">
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('diff bordered');
});

it('renders text content in items', function () {
    $html = Blade::render(<<<'blade'
        <x-diff class="aspect-16/9">
            <x-slot:item1>
                <div class="bg-primary text-primary-content text-9xl font-black grid place-content-center">DAISY</div>
            </x-slot:item1>
            <x-slot:item2>
                <div class="bg-base-200 text-9xl font-black grid place-content-center">DAISY</div>
            </x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('DAISY');
    expect($html)->toContain('bg-primary');
    expect($html)->toContain('bg-base-200');
});

it('renders resizer slot content', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
            <x-slot:resizer><div class="diff-resizer"></div></x-slot:resizer>
        </x-diff>
    blade);

    expect($html)->toContain('class="diff-resizer"');
});

it('renders figure element', function () {
    $html = Blade::render(<<<'blade'
        <x-diff>
            <x-slot:item1>Item 1</x-slot:item1>
            <x-slot:item2>Item 2</x-slot:item2>
        </x-diff>
    blade);

    expect($html)->toContain('<figure');
    expect($html)->toContain('</figure>');
});
