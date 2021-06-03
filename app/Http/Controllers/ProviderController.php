<?php

namespace App\Http\Controllers;

use App\Http\Service\ProviderService;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    private $providerSer;
    public function __construct(ProviderService $providerService)
    {
        $this->providerSer = $providerService;
    }

    public function index() 
    {
        $providers = $this->providerSer->getAll();
        return view('admin.provider.list', compact('providers'));
    }

    public function create() {
        return view('admin.provider.create');
    }

    public function store(Request $request)
    {
         $this->providerSer->store($request);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}
