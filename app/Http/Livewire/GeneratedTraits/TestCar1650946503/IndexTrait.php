<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1650946503;

use App\Models\TestCar1650946503;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1650946503 $testcar1650946503;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1650946503.index', compact('items'));
    }
}
