<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1607781032;

use App\Models\TestCar1607781032;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1607781032 $testcar1607781032;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1607781032.index', compact('items'));
    }
}
