<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1533430550;

use App\Models\TestCar1533430550;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1533430550 $testcar1533430550;

    public function render()
    {
        $items = TestCar1533430550::paginate($this->perPage);

        return view('livewire.testcar1533430550.index', compact('items'));
    }
}
