<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1874892366;

use App\Models\TestCar1874892366;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1874892366 $testCar1874892366;

    public function render()
    {
        $items = TestCar1874892366::paginate($this->perPage);

        return view('livewire.generated.test-car1874892366.index', compact('items'));
    }

            public function delete(TestCar1874892366 $testCar1874892366): void
        {
                                                if ($testCar1874892366->testCar2531151581s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1874892366->delete();
        }
    }
