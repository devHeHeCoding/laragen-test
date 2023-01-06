<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar821976173;

use App\Models\TestCar821976173;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar821976173 $testcar821976173;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar821976173.index', compact('items'));
    }
}
