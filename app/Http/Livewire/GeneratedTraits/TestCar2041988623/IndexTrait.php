<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2041988623;

use App\Models\TestCar2041988623;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2041988623 $testCar2041988623;

    public function render()
    {
        $items = TestCar2041988623::paginate($this->perPage);

        return view('livewire.test-car2041988623.index', compact('items'));
    }

            public function delete(TestCar2041988623 $testCar2041988623): void
        {
                                                if ($testCar2041988623->testCar21408687087s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2041988623->delete();
        }
    }
