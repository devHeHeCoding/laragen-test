<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1457791476;

use App\Models\TestCar1457791476;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1457791476 $testCar1457791476;

    public function render()
    {
        $items = TestCar1457791476::paginate($this->perPage);

        return view('livewire.generated.test-car1457791476.index', compact('items'));
    }

            public function delete(TestCar1457791476 $testCar1457791476): void
        {
                                                if ($testCar1457791476->testCar21611687540s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1457791476->delete();
        }
    }
