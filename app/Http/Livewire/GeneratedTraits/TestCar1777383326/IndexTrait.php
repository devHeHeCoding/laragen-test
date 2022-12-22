<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1777383326;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1777383326 $testcar1777383326;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar1777383326.index', compact('items'));
    }
}
