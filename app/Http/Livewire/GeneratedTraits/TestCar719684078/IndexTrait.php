<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar719684078;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar719684078 $testcar719684078;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar719684078.index', compact('items'));
    }
}
