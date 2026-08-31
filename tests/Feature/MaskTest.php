<?php

declare(strict_types=1);

namespace BladeUix\Tests\Feature;

it(description: 'can render mask with default classes', closure: function () {
    $view = $this->blade(template: '<x-mask><img src="test.jpg" /></x-mask>');

    $view->assertSeeHtmlInOrder(values: [
        '<div class="mask">',
        '<img src="test.jpg" />',
        '</div>',
    ]);
});

it(description: 'can render mask with squircle shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="squircle"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-squircle"', escape: false);
});

it(description: 'can render mask with heart shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="heart"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-heart"', escape: false);
});

it(description: 'can render mask with hexagon shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="hexagon"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-hexagon"', escape: false);
});

it(description: 'can render mask with hexagon-2 shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="hexagon-2"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-hexagon-2"', escape: false);
});

it(description: 'can render mask with decagon shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="decagon"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-decagon"', escape: false);
});

it(description: 'can render mask with pentagon shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="pentagon"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-pentagon"', escape: false);
});

it(description: 'can render mask with diamond shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="diamond"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-diamond"', escape: false);
});

it(description: 'can render mask with square shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="square"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-square"', escape: false);
});

it(description: 'can render mask with circle shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="circle"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-circle"', escape: false);
});

it(description: 'can render mask with star shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="star"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-star"', escape: false);
});

it(description: 'can render mask with star-2 shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="star-2"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-star-2"', escape: false);
});

it(description: 'can render mask with triangle shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="triangle"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-triangle"', escape: false);
});

it(description: 'can render mask with triangle-2 shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="triangle-2"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-triangle-2"', escape: false);
});

it(description: 'can render mask with triangle-3 shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="triangle-3"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-triangle-3"', escape: false);
});

it(description: 'can render mask with triangle-4 shape', closure: function () {
    $view = $this->blade(template: '<x-mask shape="triangle-4"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-triangle-4"', escape: false);
});

it(description: 'can render mask with half-1 modifier', closure: function () {
    $view = $this->blade(template: '<x-mask shape="circle" half="1"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-circle mask-half-1"', escape: false);
});

it(description: 'can render mask with half-2 modifier', closure: function () {
    $view = $this->blade(template: '<x-mask shape="circle" half="2"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-circle mask-half-2"', escape: false);
});

it(description: 'can render mask with custom classes', closure: function () {
    $view = $this->blade(template: '<x-mask shape="circle" class="size-40"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'class="mask mask-circle size-40"', escape: false);
});

it(description: 'can render mask with additional attributes', closure: function () {
    $view = $this->blade(template: '<x-mask shape="circle" id="mask-id"><img src="test.jpg" /></x-mask>');

    $view->assertSee(value: 'id="mask-id"', escape: false);
    $view->assertSee(value: 'class="mask mask-circle"', escape: false);
});

it(description: 'can render empty mask', closure: function () {
    $view = $this->blade(template: '<x-mask></x-mask>');

    $view->assertSee(value: '<div class="mask"></div>', escape: false);
});
