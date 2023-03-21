<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172364925;

use App\Models\TestCar172364925;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar172364925 $testCar172364925;

    public function render()
    {
        $items = TestCar172364925::paginate($this->perPage);

        return view('livewire.generated.test-car172364925.index', compact('items'));
    }

            public function delete(TestCar172364925 $testCar172364925): void
        {
                                                if ($testCar172364925->testCar2587757052s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar172364925->delete();
        }
    }
