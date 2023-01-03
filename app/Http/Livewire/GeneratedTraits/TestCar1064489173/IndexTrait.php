<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1064489173;

use App\Models\TestCar1064489173;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1064489173 $testcar1064489173;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1064489173.index', compact('items'));
    }
}
