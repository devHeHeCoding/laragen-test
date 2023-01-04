<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1236519354;

use App\Models\TestCar1236519354;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1236519354 $testcar1236519354;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1236519354.index', compact('items'));
    }
}
