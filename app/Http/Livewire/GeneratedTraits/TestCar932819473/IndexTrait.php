<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar932819473;

use App\Models\TestCar932819473;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar932819473 $testCar932819473;

    public function render()
    {
        $items = TestCar932819473::paginate($this->perPage);

        return view('livewire.generated.test-car932819473.index', compact('items'));
    }

            public function delete(TestCar932819473 $testCar932819473): void
        {
                                                if ($testCar932819473->testCar21635389240s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar932819473->delete();
        }
    }
