<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar102339461;

use App\Models\TestCar102339461;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar102339461 $testCar102339461;

    public function render()
    {
        $items = TestCar102339461::paginate($this->perPage);

        return view('livewire.test-car102339461.index', compact('items'));
    }

            public function delete(TestCar102339461 $testCar102339461): void
        {
                                                if ($testCar102339461->testCar2339545101s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar102339461->delete();
        }
    }
