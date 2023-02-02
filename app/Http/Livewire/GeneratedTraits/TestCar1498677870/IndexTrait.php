<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1498677870;

use App\Models\TestCar1498677870;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1498677870 $testCar1498677870;

    public function render()
    {
        $items = TestCar1498677870::paginate($this->perPage);

        return view('livewire.test-car1498677870.index', compact('items'));
    }

            public function delete(TestCar1498677870 $testCar1498677870): void
        {
                                                if ($testCar1498677870->testCar21519226206s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1498677870->delete();
        }
    }
