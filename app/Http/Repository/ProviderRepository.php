<?php

namespace App\Http\Repository;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderRepository
{
    function getAll() {
        return Provider::paginate(10);
    }

    function store($provider) {
        $provider->save();
    }
}
