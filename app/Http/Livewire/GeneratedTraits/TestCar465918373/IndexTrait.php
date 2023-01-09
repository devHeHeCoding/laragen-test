<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar465918373;

use App\Models\TestCar465918373;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar465918373 $testcar465918373;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar465918373.index', compact('items'));
    }
}
