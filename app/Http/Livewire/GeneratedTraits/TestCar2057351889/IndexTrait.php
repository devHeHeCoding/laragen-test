<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2057351889;

use App\Models\TestCar2057351889;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2057351889 $testCar2057351889;

    public function render()
    {
        $items = TestCar2057351889::paginate($this->perPage);

        return view('livewire.test-car2057351889.index', compact('items'));
    }

        public function delete(TestCar2057351889 $testCar2057351889): void
    {
                                    abort_if(
                    $testCar2057351889->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar2057351889->delete();
    }
    }
