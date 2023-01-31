<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738787120;

use App\Models\TestCar738787120;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar738787120 $testCar738787120;

    public function render()
    {
        $items = TestCar738787120::paginate($this->perPage);

        return view('livewire.test-car738787120.index', compact('items'));
    }

            public function delete(TestCar738787120 $testCar738787120): void
        {
                                                if ($testCar738787120->testCar21944837761s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar738787120->delete();
        }
    }
