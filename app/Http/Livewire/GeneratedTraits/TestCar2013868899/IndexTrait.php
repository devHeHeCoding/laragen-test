<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2013868899;

use App\Models\TestCar2013868899;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2013868899 $testcar2013868899;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar2013868899.index', compact('items'));
    }
}
