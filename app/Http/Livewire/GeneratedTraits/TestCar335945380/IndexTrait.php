<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar335945380;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar335945380 $testcar335945380;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar335945380.index', compact('items'));
    }
}
