<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar53714731;

use App\Models\TestCar53714731;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar53714731 $testcar53714731;

    public function render()
    {
        $items = TestCar53714731::paginate($this->perPage);

        return view('livewire.testcar53714731.index', compact('items'));
    }
}
