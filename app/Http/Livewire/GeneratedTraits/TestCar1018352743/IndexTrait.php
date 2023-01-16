<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1018352743;

use App\Models\TestCar1018352743;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1018352743 $testcar1018352743;

    public function render()
    {
        $items = TestCar1018352743::paginate($this->perPage);

        return view('livewire.testcar1018352743.index', compact('items'));
    }
}
