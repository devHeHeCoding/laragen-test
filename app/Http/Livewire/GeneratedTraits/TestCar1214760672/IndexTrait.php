<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1214760672;

use App\Models\TestCar1214760672;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1214760672 $testCar1214760672;

    public function render()
    {
        $items = TestCar1214760672::paginate($this->perPage);

        return view('livewire.test-car1214760672.index', compact('items'));
    }

            public function delete(TestCar1214760672 $testCar1214760672): void
        {
                                                if ($testCar1214760672->testCar21502523278s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1214760672->delete();
        }
    }
