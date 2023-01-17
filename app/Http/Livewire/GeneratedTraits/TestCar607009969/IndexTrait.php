<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar607009969;

use App\Models\TestCar607009969;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar607009969 $testCar607009969;

    public function render()
    {
        $items = TestCar607009969::paginate($this->perPage);

        return view('livewire.testcar607009969.index', compact('items'));
    }

        public function delete(TestCar607009969 $testCar607009969): void
    {
                                    abort_if(
                    $testCar607009969->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar607009969->delete();
    }
    }
