<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1703144420;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1703144420 $testcar1703144420;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar1703144420.index', compact('items'));
    }
}
