<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar3524894;

use App\Models\TestCar3524894;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar3524894 $testcar3524894;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar3524894.index', compact('items'));
    }
}
