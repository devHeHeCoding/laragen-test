<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1655393634;

use App\Models\TestCar1655393634;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1655393634 $testcar1655393634;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1655393634.index', compact('items'));
    }
}
