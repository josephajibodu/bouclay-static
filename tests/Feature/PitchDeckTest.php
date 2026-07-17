<?php

test('the pitch deck page is available', function () {
    $this->get(route('pitch-deck'))
        ->assertSuccessful()
        ->assertSee('Investor pitch deck', false)
        ->assertSee('Managed recurring billing, across any payment gateway.', false)
        ->assertSee('Payment gateways do not ship a billing system.', false)
        ->assertSee('Unique value proposition', false)
        ->assertSee('Competitive landscape', false)
        ->assertSee('Monetize orchestration, not settlement.', false)
        ->assertSee('Fund the path from working billing core', false)
        ->assertSee('hello@bouclay.com', false);
});
