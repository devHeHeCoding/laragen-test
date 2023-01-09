<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar597321278;

use App\Models\TestCar597321278;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar597321278 $testcar597321278;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar597321278.index', compact('items'));
    }
}
