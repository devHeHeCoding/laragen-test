<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar99188925;

use App\Models\TestCar99188925;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar99188925 $testcar99188925;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar99188925.index', compact('items'));
    }
}
