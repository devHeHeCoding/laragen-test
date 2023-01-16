<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1952538869;

use App\Models\TestCar1952538869;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1952538869 $testCar1952538869;

    public function render()
    {
        $items = TestCar1952538869::paginate($this->perPage);

        return view('livewire.testcar1952538869.index', compact('items'));
    }

        public function delete(TestCar1952538869 $testCar1952538869): void
    {
                                    abort_if(
                    $testCar1952538869->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1952538869->delete();
    }
    }
