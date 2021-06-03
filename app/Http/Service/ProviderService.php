<?php

namespace App\Http\Service;

use App\Http\Repository\ProviderRepository;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderService
{
    private $providerRepo;

    public function __construct(ProviderRepository $providerRepository)
    {
        $this->providerRepo= $providerRepository;

        
    }
    function getAll() 
    {
        return $this->providerRepo->getAll();
    }

    function store($data) {
        $provider = new Provider();
        $provider->fill($data->all());
        return $this->providerRepo->store($provider);
    }
}
