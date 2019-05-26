<?php
namespace App\Services;

use App\Repository\Contract\CattleContract;

class CattleService
{
    public $cattleContract;
    public function __construct(CattleContract $cattleContract)
    {
        $this->cattleContract = $cattleContract;
    }

    public function getCattle()
    {
        return $this->cattleContract->getCattle();
    }
}