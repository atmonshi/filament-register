<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Avatar extends Controller
{
    public function __invoke()
    {
        return \Filament\Facades\Filament::getUserAvatarUrl(auth()->user());
    }
}
