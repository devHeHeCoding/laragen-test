<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1949212830;

use App\Models\TestCar1949212830;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1949212830 $testCar1949212830;

    public function render()
    {
        $items = TestCar1949212830::paginate($this->perPage);

        return view('livewire.generated.test-car1949212830.index', compact('items'));
    }

            public function delete(TestCar1949212830 $testCar1949212830): void
        {
                                                if ($testCar1949212830->testCar2580666442s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1949212830->delete();
        }
    }
