<?php

test('unknown routes render the custom not found page', function () {
    $this->get('/this-page-does-not-exist')
        ->assertNotFound()
        ->assertSee('Error 404', false)
        ->assertSee('This page is not on the map.', false)
        ->assertSee('Back to home', false);
});
