<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1763696955;

use App\Models\TestCar1763696955;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1763696955 $testcar1763696955;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1763696955.index', compact('items'));
    }
}
