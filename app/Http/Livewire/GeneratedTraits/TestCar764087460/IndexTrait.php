<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar764087460;

use App\Models\TestCar764087460;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar764087460 $testCar764087460;

    public function render()
    {
        $items = TestCar764087460::paginate($this->perPage);

        return view('livewire.test-car764087460.index', compact('items'));
    }

        public function delete(TestCar764087460 $testCar764087460): void
    {
                                    abort_if(
                    $testCar764087460->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar764087460->delete();
    }
    }
