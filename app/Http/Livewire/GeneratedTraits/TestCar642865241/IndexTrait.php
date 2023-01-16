<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar642865241;

use App\Models\TestCar642865241;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar642865241 $testcar642865241;

    public function render()
    {
        $items = TestCar642865241::paginate($this->perPage);

        return view('livewire.testcar642865241.index', compact('items'));
    }
}
