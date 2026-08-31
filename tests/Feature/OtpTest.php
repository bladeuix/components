<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Blade;

it('renders basic otp with 4 spans', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp"></x-otp>
    blade);

    expect($html)->toContain('class="otp"');
    expect($html)->toContain('<label');
    expect($html)->toContain('</label>');
    expect($html)->toContain('<span></span>');
    expect($html)->toContain('<input');
    expect($html)->toContain('id="otp"');
    expect($html)->toContain('name="otp"');
    expect($html)->toContain('type="text"');
    expect($html)->toContain('autocomplete="one-time-code"');
    expect($html)->toContain('inputmode="numeric"');

    $spanCount = substr_count($html, '<span></span>');
    expect($spanCount)->toBe(4);
});

it('applies default type', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp"></x-otp>
    blade);

    expect($html)->toContain('type="text"');
});

it('applies default autocomplete', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp"></x-otp>
    blade);

    expect($html)->toContain('autocomplete="one-time-code"');
});

it('applies default inputmode', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp"></x-otp>
    blade);

    expect($html)->toContain('inputmode="numeric"');
});

it('sets id and name from id prop', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="code"></x-otp>
    blade);

    expect($html)->toContain('id="code"');
    expect($html)->toContain('name="code"');
});

it('renders with custom length', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" :length="6"></x-otp>
    blade);

    $spanCount = substr_count($html, '<span></span>');
    expect($spanCount)->toBe(6);
});

it('renders with size xs', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" size="xs"></x-otp>
    blade);

    expect($html)->toContain('otp-xs');
});

it('renders with size sm', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" size="sm"></x-otp>
    blade);

    expect($html)->toContain('otp-sm');
});

it('renders with size md', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" size="md"></x-otp>
    blade);

    expect($html)->toContain('otp-md');
});

it('renders with size lg', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" size="lg"></x-otp>
    blade);

    expect($html)->toContain('otp-lg');
});

it('renders with size xl', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" size="xl"></x-otp>
    blade);

    expect($html)->toContain('otp-xl');
});

it('renders with color neutral', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="neutral"></x-otp>
    blade);

    expect($html)->toContain('otp-neutral');
});

it('renders with color primary', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="primary"></x-otp>
    blade);

    expect($html)->toContain('otp-primary');
});

it('renders with color secondary', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="secondary"></x-otp>
    blade);

    expect($html)->toContain('otp-secondary');
});

it('renders with color accent', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="accent"></x-otp>
    blade);

    expect($html)->toContain('otp-accent');
});

it('renders with color info', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="info"></x-otp>
    blade);

    expect($html)->toContain('otp-info');
});

it('renders with color success', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="success"></x-otp>
    blade);

    expect($html)->toContain('otp-success');
});

it('renders with color warning', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="warning"></x-otp>
    blade);

    expect($html)->toContain('otp-warning');
});

it('renders with color error', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" color="error"></x-otp>
    blade);

    expect($html)->toContain('otp-error');
});

it('renders joined variant', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" joined></x-otp>
    blade);

    expect($html)->toContain('otp-joined');
});

it('renders with custom classes', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" class="my-custom-otp"></x-otp>
    blade);

    expect($html)->toContain('otp my-custom-otp');
});

it('renders with additional attributes', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="my-otp" data-testid="verification"></x-otp>
    blade);

    expect($html)->toContain('id="my-otp"');
    expect($html)->toContain('name="my-otp"');
    expect($html)->toContain('data-testid="verification"');
});

it('passes maxlength to input', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" maxlength="6"></x-otp>
    blade);

    expect($html)->toContain('maxlength="6"');
});

it('passes pattern to input', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" pattern="[0-9]{6}" maxlength="6"></x-otp>
    blade);

    expect($html)->toContain('pattern="[0-9]{6}"');
    expect($html)->toContain('maxlength="6"');
});

it('passes disabled to input', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" disabled></x-otp>
    blade);

    expect($html)->toContain('disabled');
});

it('passes readonly to input', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" readonly></x-otp>
    blade);

    expect($html)->toContain('readonly');
});

it('can override type', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" type="password"></x-otp>
    blade);

    expect($html)->toContain('type="password"');
    expect($html)->not->toContain('type="text"');
});

it('can override autocomplete', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" autocomplete="off"></x-otp>
    blade);

    expect($html)->toContain('autocomplete="off"');
    expect($html)->not->toContain('autocomplete="one-time-code"');
});

it('can override inputmode', function () {
    $html = Blade::render(<<<'blade'
        <x-otp id="otp" inputmode="decimal"></x-otp>
    blade);

    expect($html)->toContain('inputmode="decimal"');
    expect($html)->not->toContain('inputmode="numeric"');
});
