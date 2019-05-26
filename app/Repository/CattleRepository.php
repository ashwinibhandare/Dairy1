<?php
namespace App\Repository;

use App\Model\Cattle;
use App\Repository\Contract\CattleContract;
use phpDocumentor\Reflection\Types\Object_;

class CattleRepository implements CattleContract
{
    public $cattle;
    public function __construct(Cattle $cattle)
    {
        $this->cattleModel = $cattle;
    }

    public function getCattle()
    {
        return $this->cattleModel->get();
    }
}