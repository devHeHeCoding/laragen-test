<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1319824640;

use App\Models\TestCar1319824640;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1319824640 $testCar1319824640;

    public function render()
    {
        $items = TestCar1319824640::paginate($this->perPage);

        return view('livewire.generated.test-car1319824640.index', compact('items'));
    }

            public function delete(TestCar1319824640 $testCar1319824640): void
        {
                                                if ($testCar1319824640->testCar22042193394s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1319824640->delete();
        }
    }
