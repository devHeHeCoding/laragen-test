<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar42821279;

use App\Models\TestCar42821279;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar42821279 $testcar42821279;

    public function render()
    {
        $items = TestCar42821279::paginate($this->perPage);

        return view('livewire.testcar42821279.index', compact('items'));
    }
}
