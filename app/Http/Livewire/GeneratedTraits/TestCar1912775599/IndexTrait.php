<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1912775599;

use App\Models\TestCar1912775599;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1912775599 $testcar1912775599;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1912775599.index', compact('items'));
    }
}
