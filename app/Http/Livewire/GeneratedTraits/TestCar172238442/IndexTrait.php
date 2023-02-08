<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172238442;

use App\Models\TestCar172238442;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar172238442 $testCar172238442;

    public function render()
    {
        $items = TestCar172238442::paginate($this->perPage);

        return view('livewire.generated.test-car172238442.index', compact('items'));
    }

            public function delete(TestCar172238442 $testCar172238442): void
        {
                                                if ($testCar172238442->testCar2962825571s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar172238442->delete();
        }
    }
