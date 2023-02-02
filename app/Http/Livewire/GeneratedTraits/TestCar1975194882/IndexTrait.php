<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1975194882;

use App\Models\TestCar1975194882;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1975194882 $testCar1975194882;

    public function render()
    {
        $items = TestCar1975194882::paginate($this->perPage);

        return view('livewire.test-car1975194882.index', compact('items'));
    }

            public function delete(TestCar1975194882 $testCar1975194882): void
        {
                                                if ($testCar1975194882->testCar21167779156s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1975194882->delete();
        }
    }
