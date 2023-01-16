<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar243962112;

use App\Models\TestCar243962112;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar243962112 $testcar243962112;

    public function render()
    {
        $items = TestCar243962112::paginate($this->perPage);

        return view('livewire.testcar243962112.index', compact('items'));
    }
}
