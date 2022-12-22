<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar807149302;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar807149302 $testcar807149302;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar807149302.index', compact('items'));
    }
}
