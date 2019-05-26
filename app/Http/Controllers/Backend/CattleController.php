<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\CattleService;

class CattleController extends Controller
{
    public $cattleService;
    public function __construct(CattleService $cattleService)
    {
        $this->cattleService = $cattleService;
    }

    public function list()
    {
        $cattle = $this->cattleService->getCattle();
        return view('dashboard.listofcattle', ['cattle' => $cattle]);
    }
}
