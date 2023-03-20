<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar795180617;

use App\Models\TestCar795180617;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar795180617 $testCar795180617;

    public function render()
    {
        $items = TestCar795180617::paginate($this->perPage);

        return view('livewire.generated.test-car795180617.index', compact('items'));
    }

            public function delete(TestCar795180617 $testCar795180617): void
        {
                                                if ($testCar795180617->testCar2178793530s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar795180617->delete();
        }
    }
