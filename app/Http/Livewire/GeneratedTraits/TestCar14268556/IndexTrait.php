<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar14268556;

use App\Models\TestCar14268556;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar14268556 $testcar14268556;

    public function render()
    {
        $items = TestCar14268556::paginate($this->perPage);

        return view('livewire.testcar14268556.index', compact('items'));
    }
}
