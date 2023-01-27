<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2113596585;

use App\Models\TestCar2113596585;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2113596585 $testCar2113596585;

    public function render()
    {
        $items = TestCar2113596585::paginate($this->perPage);

        return view('livewire.test-car2113596585.index', compact('items'));
    }

            public function delete(TestCar2113596585 $testCar2113596585): void
        {
                                                if ($testCar2113596585->testCar2775542222s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2113596585->delete();
        }
    }
