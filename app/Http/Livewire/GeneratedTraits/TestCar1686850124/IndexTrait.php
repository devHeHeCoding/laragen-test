<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1686850124;

use App\Models\TestCar1686850124;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1686850124 $testCar1686850124;

    public function render()
    {
        $items = TestCar1686850124::paginate($this->perPage);

        return view('livewire.generated.test-car1686850124.index', compact('items'));
    }

            public function delete(TestCar1686850124 $testCar1686850124): void
        {
                                                if ($testCar1686850124->testCar21754238248s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1686850124->delete();
        }
    }
