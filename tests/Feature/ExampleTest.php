<?php

test('the home page returns a successful response', function () {
    $response = $this->get(route('home'));

    $response
        ->assertSuccessful()
        ->assertSee('Bouclay', false)
        ->assertSee('Billing infrastructure for software that ships.', false)
        ->assertSee('Gateway-agnostic by design', false)
        ->assertSee('Bouclay Inc.', false)
        ->assertDontSee('Nomba', false)
        ->assertDontSee('African', false)
        ->assertDontSee('NGN', false);
});
