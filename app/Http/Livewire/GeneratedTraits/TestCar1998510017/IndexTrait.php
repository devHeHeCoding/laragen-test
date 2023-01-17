<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1998510017;

use App\Models\TestCar1998510017;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1998510017 $testcar1998510017;

    public function render()
    {
        $items = TestCar1998510017::paginate($this->perPage);

        return view('livewire.testcar1998510017.index', compact('items'));
    }
}
