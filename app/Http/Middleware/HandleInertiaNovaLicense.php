<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class HandleInertiaNovaLicense extends \Laravel\Nova\Http\Middleware\HandleInertiaRequests
{
    #[\Override]
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'validLicense' => static function () use ($request) {
                return true;
            },
        ]);
    }
}
