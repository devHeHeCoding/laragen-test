<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1068148824;

use App\Models\TestCar1068148824;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1068148824 $testcar1068148824;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1068148824.index', compact('items'));
    }
}
