<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar643697074;

use App\Models\TestCar643697074;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar643697074 $testcar643697074;

    public function render()
    {
        $items = TestCar643697074::paginate($this->perPage);

        return view('livewire.testcar643697074.index', compact('items'));
    }
}
