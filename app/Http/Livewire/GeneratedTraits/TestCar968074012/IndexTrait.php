<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar968074012;

use App\Models\TestCar968074012;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar968074012 $testcar968074012;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar968074012.index', compact('items'));
    }
}
