<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1834174868;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1834174868 $testcar1834174868;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar1834174868.index', compact('items'));
    }
}
