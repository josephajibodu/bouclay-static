<?php

test('the home page returns a successful response', function () {
    $response = $this->get(route('home'));

    $response
        ->assertSuccessful()
        ->assertSee('Bouclay', false)
        ->assertSee('Stop rebuilding subscriptions around payment primitives.', false);
});
