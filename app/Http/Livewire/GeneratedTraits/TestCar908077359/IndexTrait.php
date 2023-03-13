<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar908077359;

use App\Models\TestCar908077359;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar908077359 $testCar908077359;

    public function render()
    {
        $items = TestCar908077359::paginate($this->perPage);

        return view('livewire.generated.test-car908077359.index', compact('items'));
    }

            public function delete(TestCar908077359 $testCar908077359): void
        {
                                                if ($testCar908077359->testCar2613481172s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar908077359->delete();
        }
    }
