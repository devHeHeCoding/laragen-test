<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1729187173;

use App\Models\TestCar1729187173;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1729187173 $testCar1729187173;

    public function render()
    {
        $items = TestCar1729187173::paginate($this->perPage);

        return view('livewire.test-car1729187173.index', compact('items'));
    }

            public function delete(TestCar1729187173 $testCar1729187173): void
        {
                                                if ($testCar1729187173->testCar22058410205s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1729187173->delete();
        }
    }
