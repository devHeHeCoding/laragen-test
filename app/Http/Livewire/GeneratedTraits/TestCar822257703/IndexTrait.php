<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar822257703;

use App\Models\TestCar822257703;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar822257703 $testCar822257703;

    public function render()
    {
        $items = TestCar822257703::paginate($this->perPage);

        return view('livewire.generated.test-car822257703.index', compact('items'));
    }

            public function delete(TestCar822257703 $testCar822257703): void
        {
                                                if ($testCar822257703->testCar21154936442s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar822257703->delete();
        }
    }
