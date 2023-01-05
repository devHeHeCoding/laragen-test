<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2097014541;

use App\Models\TestCar2097014541;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2097014541 $testcar2097014541;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar2097014541.index', compact('items'));
    }
}
