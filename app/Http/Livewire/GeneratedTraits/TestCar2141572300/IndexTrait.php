<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2141572300;

use App\Models\TestCar2141572300;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2141572300 $testcar2141572300;

    public function render()
    {
        $items = TestCar2141572300::paginate($this->perPage);

        return view('livewire.testcar2141572300.index', compact('items'));
    }
}
