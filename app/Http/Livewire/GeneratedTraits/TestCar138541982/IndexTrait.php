<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar138541982;

use App\Models\TestCar138541982;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar138541982 $testcar138541982;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar138541982.index', compact('items'));
    }

        public function delete(TestCar138541982 $testcar138541982): void
    {
        $user->delete();
    }
    }
