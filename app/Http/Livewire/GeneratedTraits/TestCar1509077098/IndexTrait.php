<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1509077098;

use App\Models\TestCar1509077098;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1509077098 $testcar1509077098;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1509077098.index', compact('items'));
    }
}
