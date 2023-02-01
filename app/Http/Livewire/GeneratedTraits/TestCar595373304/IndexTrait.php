<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar595373304;

use App\Models\TestCar595373304;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar595373304 $testCar595373304;

    public function render()
    {
        $items = TestCar595373304::paginate($this->perPage);

        return view('livewire.test-car595373304.index', compact('items'));
    }

            public function delete(TestCar595373304 $testCar595373304): void
        {
                                                if ($testCar595373304->testCar2749242902s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar595373304->delete();
        }
    }
