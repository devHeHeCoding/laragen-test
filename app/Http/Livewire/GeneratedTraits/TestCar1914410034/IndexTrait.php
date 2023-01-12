<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1914410034;

use App\Models\TestCar1914410034;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1914410034 $testcar1914410034;

    public function render()
    {
        $items = TestCar1914410034::paginate($this->perPage);

        return view('livewire.testcar1914410034.index', compact('items'));
    }
}
