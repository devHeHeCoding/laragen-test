<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar50840283;

use App\Models\TestCar50840283;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar50840283 $testCar50840283;

    public function render()
    {
        $items = TestCar50840283::paginate($this->perPage);

        return view('livewire.test-car50840283.index', compact('items'));
    }

            public function delete(TestCar50840283 $testCar50840283): void
        {
                                                if ($testCar50840283->testCar21657116178s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar50840283->delete();
        }
    }
