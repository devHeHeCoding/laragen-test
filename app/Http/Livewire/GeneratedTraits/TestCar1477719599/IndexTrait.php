<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1477719599;

use App\Models\TestCar1477719599;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1477719599 $testCar1477719599;

    public function render()
    {
        $items = TestCar1477719599::paginate($this->perPage);

        return view('livewire.generated.test-car1477719599.index', compact('items'));
    }

            public function delete(TestCar1477719599 $testCar1477719599): void
        {
                                                if ($testCar1477719599->testCar2484130624s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1477719599->delete();
        }
    }
