<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1489424982;

use App\Models\TestCar1489424982;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1489424982 $testCar1489424982;

    public function render()
    {
        $items = TestCar1489424982::paginate($this->perPage);

        return view('livewire.testcar1489424982.index', compact('items'));
    }

        public function delete(TestCar1489424982 $testCar1489424982): void
    {
                                    abort_if(
                    $testCar1489424982->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1489424982->delete();
    }
    }
