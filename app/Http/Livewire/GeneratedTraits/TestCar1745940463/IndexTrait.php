<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1745940463;

use App\Models\TestCar1745940463;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1745940463 $testcar1745940463;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1745940463.index', compact('items'));
    }
}
