<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1290363946;

use App\Models\TestCar1290363946;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1290363946 $testCar1290363946;

    public function render()
    {
        $items = TestCar1290363946::paginate($this->perPage);

        return view('livewire.generated.test-car1290363946.index', compact('items'));
    }

            public function delete(TestCar1290363946 $testCar1290363946): void
        {
                                                if ($testCar1290363946->testCar2448467462s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1290363946->delete();
        }
    }
