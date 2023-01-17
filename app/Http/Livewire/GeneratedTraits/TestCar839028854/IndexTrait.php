<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar839028854;

use App\Models\TestCar839028854;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar839028854 $testCar839028854;

    public function render()
    {
        $items = TestCar839028854::paginate($this->perPage);

        return view('livewire.testcar839028854.index', compact('items'));
    }

        public function delete(TestCar839028854 $testCar839028854): void
    {
                                    abort_if(
                    $testCar839028854->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar839028854->delete();
    }
    }
