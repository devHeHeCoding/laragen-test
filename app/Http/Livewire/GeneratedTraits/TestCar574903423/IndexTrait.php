<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar574903423;

use App\Models\TestCar574903423;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar574903423 $testcar574903423;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar574903423.index', compact('items'));
    }
}
