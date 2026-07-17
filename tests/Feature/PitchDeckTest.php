<?php

test('the pitch deck page is available', function () {
    $this->get(route('pitch-deck'))
        ->assertSuccessful()
        ->assertSee('Pitch deck', false)
        ->assertSee('Managed recurring billing,', false)
        ->assertSee('Problem', false)
        ->assertSee('Gateways are not billing systems.', false)
        ->assertSee('UVP', false)
        ->assertSee('We sit in the gap.', false)
        ->assertSee('Fund the path to production integrators.', false)
        ->assertSee('hello@bouclay.com', false);
});
