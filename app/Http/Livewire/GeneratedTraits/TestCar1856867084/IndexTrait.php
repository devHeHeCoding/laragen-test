<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1856867084;

use App\Models\TestCar1856867084;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1856867084 $testcar1856867084;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1856867084.index', compact('items'));
    }
}
