<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1211856944;

use App\Models\TestCar1211856944;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1211856944 $testcar1211856944;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1211856944.index', compact('items'));
    }
}
