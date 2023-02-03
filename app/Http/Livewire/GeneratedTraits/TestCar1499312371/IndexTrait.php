<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1499312371;

use App\Models\TestCar1499312371;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1499312371 $testCar1499312371;

    public function render()
    {
        $items = TestCar1499312371::paginate($this->perPage);

        return view('livewire.test-car1499312371.index', compact('items'));
    }

            public function delete(TestCar1499312371 $testCar1499312371): void
        {
                                                if ($testCar1499312371->testCar2527116558s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1499312371->delete();
        }
    }
