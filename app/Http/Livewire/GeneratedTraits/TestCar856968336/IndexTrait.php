<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar856968336;

use App\Models\TestCar856968336;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar856968336 $testCar856968336;

    public function render()
    {
        $items = TestCar856968336::paginate($this->perPage);

        return view('livewire.test-car856968336.index', compact('items'));
    }

            public function delete(TestCar856968336 $testCar856968336): void
        {
                                                if ($testCar856968336->testCar2395769752s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar856968336->delete();
        }
    }
