<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar504939058;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar504939058 $testcar504939058;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar504939058.index', compact('items'));
    }
}
