<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1096121828;

use App\Models\TestCar1096121828;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1096121828 $testcar1096121828;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1096121828.index', compact('items'));
    }
}
