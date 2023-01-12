<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2083545807;

use App\Models\TestCar2083545807;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2083545807 $testcar2083545807;

    public function render()
    {
        $items = TestCar2083545807::paginate($this->perPage);

        return view('livewire.testcar2083545807.index', compact('items'));
    }
}
