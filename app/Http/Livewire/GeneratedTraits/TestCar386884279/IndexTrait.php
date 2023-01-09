<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar386884279;

use App\Models\TestCar386884279;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar386884279 $testcar386884279;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar386884279.index', compact('items'));
    }
}
