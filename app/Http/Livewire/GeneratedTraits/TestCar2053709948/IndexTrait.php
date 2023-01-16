<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2053709948;

use App\Models\TestCar2053709948;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2053709948 $testcar2053709948;

    public function render()
    {
        $items = TestCar2053709948::paginate($this->perPage);

        return view('livewire.testcar2053709948.index', compact('items'));
    }
}
