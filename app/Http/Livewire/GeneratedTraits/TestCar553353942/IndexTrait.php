<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar553353942;

use App\Models\TestCar553353942;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar553353942 $testCar553353942;

    public function render()
    {
        $items = TestCar553353942::paginate($this->perPage);

        return view('livewire.testcar553353942.index', compact('items'));
    }

        public function delete(TestCar553353942 $testCar553353942): void
    {
                                    abort_if(
                    $testCar553353942->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar553353942->delete();
    }
    }
