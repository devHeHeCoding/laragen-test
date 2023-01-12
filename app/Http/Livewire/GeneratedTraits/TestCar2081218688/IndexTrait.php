<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2081218688;

use App\Models\TestCar2081218688;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2081218688 $testcar2081218688;

    public function render()
    {
        $items = TestCar2081218688::paginate($this->perPage);

        return view('livewire.testcar2081218688.index', compact('items'));
    }
}
