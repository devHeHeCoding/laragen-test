<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1629897200;

use App\Models\TestCar1629897200;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1629897200 $testCar1629897200;

    public function render()
    {
        $items = TestCar1629897200::paginate($this->perPage);

        return view('livewire.test-car1629897200.index', compact('items'));
    }

            public function delete(TestCar1629897200 $testCar1629897200): void
        {
                                                if ($testCar1629897200->testCar2616643266s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1629897200->delete();
        }
    }
