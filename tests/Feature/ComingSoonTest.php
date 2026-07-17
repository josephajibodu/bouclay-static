<?php

test('the login page shows coming soon', function () {
    $this->get(route('login'))
        ->assertSuccessful()
        ->assertSee('Coming soon', false)
        ->assertSee('Log in is almost ready.', false);
});

test('the register page shows coming soon', function () {
    $this->get(route('register'))
        ->assertSuccessful()
        ->assertSee('Coming soon', false)
        ->assertSee('Workspace access is almost ready.', false);
});
