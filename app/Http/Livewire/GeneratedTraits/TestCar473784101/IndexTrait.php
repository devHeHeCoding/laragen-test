<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar473784101;

use App\Models\TestCar473784101;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar473784101 $testCar473784101;

    public function render()
    {
        $items = TestCar473784101::paginate($this->perPage);

        return view('livewire.testcar473784101.index', compact('items'));
    }

        public function delete(TestCar473784101 $testCar473784101): void
    {
                                    abort_if(
                    $testCar473784101->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar473784101->delete();
    }
    }
