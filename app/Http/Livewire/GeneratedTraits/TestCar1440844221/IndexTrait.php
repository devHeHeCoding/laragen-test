<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1440844221;

use App\Models\TestCar1440844221;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1440844221 $testcar1440844221;

    public function render()
    {
        $items = TestCar1440844221::paginate($this->perPage);

        return view('livewire.testcar1440844221.index', compact('items'));
    }
}
