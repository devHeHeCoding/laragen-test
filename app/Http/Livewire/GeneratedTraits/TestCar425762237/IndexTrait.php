<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar425762237;

use App\Models\TestCar425762237;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar425762237 $testcar425762237;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar425762237.index', compact('items'));
    }
}
