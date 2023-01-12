<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar703777210;

use App\Models\TestCar703777210;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar703777210 $testcar703777210;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar703777210.index', compact('items'));
    }
}
