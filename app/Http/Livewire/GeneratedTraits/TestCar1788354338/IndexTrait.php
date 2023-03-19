<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1788354338;

use App\Models\TestCar1788354338;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1788354338 $testCar1788354338;

    public function render()
    {
        $items = TestCar1788354338::paginate($this->perPage);

        return view('livewire.generated.test-car1788354338.index', compact('items'));
    }

            public function delete(TestCar1788354338 $testCar1788354338): void
        {
                                                if ($testCar1788354338->testCar2797932977s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1788354338->delete();
        }
    }
