<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar292656556;

use App\Models\TestCar292656556;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar292656556 $testcar292656556;

    public function render()
    {
        $items = TestCar292656556::paginate($this->perPage);

        return view('livewire.testcar292656556.index', compact('items'));
    }
}
