<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2078232593;

use App\Models\TestCar2078232593;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2078232593 $testcar2078232593;

    public function render()
    {
        $items = TestCar2078232593::paginate($this->perPage);

        return view('livewire.testcar2078232593.index', compact('items'));
    }
}
