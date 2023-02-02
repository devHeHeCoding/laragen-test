<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar527784445;

use App\Models\TestCar527784445;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar527784445 $testCar527784445;

    public function render()
    {
        $items = TestCar527784445::paginate($this->perPage);

        return view('livewire.test-car527784445.index', compact('items'));
    }

            public function delete(TestCar527784445 $testCar527784445): void
        {
                                                if ($testCar527784445->testCar2534182222s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar527784445->delete();
        }
    }
