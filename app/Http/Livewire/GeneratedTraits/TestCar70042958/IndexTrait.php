<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar70042958;

use App\Models\TestCar70042958;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar70042958 $testCar70042958;

    public function render()
    {
        $items = TestCar70042958::paginate($this->perPage);

        return view('livewire.testcar70042958.index', compact('items'));
    }

        public function delete(TestCar70042958 $testCar70042958): void
    {
                                    abort_if(
                    $testCar70042958->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar70042958->delete();
    }
    }
