<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar307697348;

use App\Models\TestCar307697348;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar307697348 $testcar307697348;

    public function render()
    {
        $items = TestCar307697348::paginate($this->perPage);

        return view('livewire.testcar307697348.index', compact('items'));
    }
}
