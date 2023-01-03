<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1635964799;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1635964799 $testcar1635964799;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar1635964799.index', compact('items'));
    }
}
