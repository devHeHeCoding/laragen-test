<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar762059127;

use App\Models\TestCar762059127;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar762059127 $testCar762059127;

    public function render()
    {
        $items = TestCar762059127::paginate($this->perPage);

        return view('livewire.testcar762059127.index', compact('items'));
    }

        public function delete(TestCar762059127 $testCar762059127): void
    {
                                    abort_if(
                    $testCar762059127->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar762059127->delete();
    }
    }
