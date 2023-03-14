<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1844893232;

use App\Models\TestCar1844893232;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1844893232 $testCar1844893232;

    public function render()
    {
        $items = TestCar1844893232::paginate($this->perPage);

        return view('livewire.generated.test-car1844893232.index', compact('items'));
    }

            public function delete(TestCar1844893232 $testCar1844893232): void
        {
                                                if ($testCar1844893232->testCar21280780265s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1844893232->delete();
        }
    }
