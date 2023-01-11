<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1764276899;

use App\Models\TestCar1764276899;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1764276899 $testcar1764276899;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1764276899.index', compact('items'));
    }
}
