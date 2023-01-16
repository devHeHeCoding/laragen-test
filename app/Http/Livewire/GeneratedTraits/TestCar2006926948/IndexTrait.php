<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2006926948;

use App\Models\TestCar2006926948;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2006926948 $testCar2006926948;

    public function render()
    {
        $items = TestCar2006926948::paginate($this->perPage);

        return view('livewire.testcar2006926948.index', compact('items'));
    }

        public function delete(TestCar2006926948 $testCar2006926948): void
    {
                                    abort_if(
                    $testCar2006926948->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar2006926948->delete();
    }
    }
