<?php

declare(strict_types=1);

arch('it will not use debugging functions')
    ->expect([
        'dd',
        'dump',
        'var_dump',
        'Illuminate\Support\Facades\Log',
        'echo',
    ])
    ->each->not->toBeUsed();

arch('it uses strict typing everywhere')
    ->expect('VPremiss\\LivewireNonceable')
    ->toUseStrictTypes();
