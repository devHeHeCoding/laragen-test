<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1961483755;

use App\Models\TestCar1961483755;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1961483755 $testcar1961483755;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1961483755.index', compact('items'));
    }
}
