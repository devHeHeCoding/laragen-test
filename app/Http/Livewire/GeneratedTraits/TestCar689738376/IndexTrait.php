<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar689738376;

use App\Models\TestCar689738376;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar689738376 $testCar689738376;

    public function render()
    {
        $items = TestCar689738376::paginate($this->perPage);

        return view('livewire.generated.test-car689738376.index', compact('items'));
    }

            public function delete(TestCar689738376 $testCar689738376): void
        {
                                                if ($testCar689738376->testCar2404538458s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar689738376->delete();
        }
    }
