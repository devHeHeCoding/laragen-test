<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar991503920;

use App\Models\TestCar991503920;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar991503920 $testcar991503920;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar991503920.index', compact('items'));
    }
}
