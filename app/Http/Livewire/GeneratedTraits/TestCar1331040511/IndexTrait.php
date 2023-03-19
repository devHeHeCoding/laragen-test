<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1331040511;

use App\Models\TestCar1331040511;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1331040511 $testCar1331040511;

    public function render()
    {
        $items = TestCar1331040511::paginate($this->perPage);

        return view('livewire.generated.test-car1331040511.index', compact('items'));
    }

            public function delete(TestCar1331040511 $testCar1331040511): void
        {
                                                if ($testCar1331040511->testCar2975269415s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1331040511->delete();
        }
    }
