<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1199394807;

use App\Models\TestCar1199394807;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1199394807 $testcar1199394807;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1199394807.index', compact('items'));
    }
}
