<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar901142568;

use App\Models\TestCar901142568;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar901142568 $testCar901142568;

    public function render()
    {
        $items = TestCar901142568::paginate($this->perPage);

        return view('livewire.test-car901142568.index', compact('items'));
    }

            public function delete(TestCar901142568 $testCar901142568): void
        {
                                                if ($testCar901142568->testCar2484779533s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar901142568->delete();
        }
    }
