<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1549481132;

use App\Models\TestCar1549481132;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1549481132 $testcar1549481132;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1549481132.index', compact('items'));
    }
}
