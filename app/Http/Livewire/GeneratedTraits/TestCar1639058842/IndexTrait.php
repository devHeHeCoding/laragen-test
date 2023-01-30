<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1639058842;

use App\Models\TestCar1639058842;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1639058842 $testCar1639058842;

    public function render()
    {
        $items = TestCar1639058842::paginate($this->perPage);

        return view('livewire.test-car1639058842.index', compact('items'));
    }

            public function delete(TestCar1639058842 $testCar1639058842): void
        {
                                                if ($testCar1639058842->testCar21880584213s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1639058842->delete();
        }
    }
