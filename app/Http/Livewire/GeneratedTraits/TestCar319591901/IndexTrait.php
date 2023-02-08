<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar319591901;

use App\Models\TestCar319591901;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar319591901 $testCar319591901;

    public function render()
    {
        $items = TestCar319591901::paginate($this->perPage);

        return view('livewire.generated.test-car319591901.index', compact('items'));
    }

            public function delete(TestCar319591901 $testCar319591901): void
        {
                                                if ($testCar319591901->testCar22078267683s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar319591901->delete();
        }
    }
