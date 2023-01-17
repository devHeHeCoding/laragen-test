<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1197168722;

use App\Models\TestCar1197168722;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1197168722 $testcar1197168722;

    public function render()
    {
        $items = TestCar1197168722::paginate($this->perPage);

        return view('livewire.test-car1197168722.index', compact('items'));
    }
}
