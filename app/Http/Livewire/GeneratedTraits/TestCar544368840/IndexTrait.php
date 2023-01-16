<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar544368840;

use App\Models\TestCar544368840;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar544368840 $testcar544368840;

    public function render()
    {
        $items = TestCar544368840::paginate($this->perPage);

        return view('livewire.testcar544368840.index', compact('items'));
    }
}
