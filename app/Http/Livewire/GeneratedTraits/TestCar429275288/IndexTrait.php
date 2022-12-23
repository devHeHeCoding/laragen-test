<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar429275288;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar429275288 $testcar429275288;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar429275288.index', compact('items'));
    }
}
