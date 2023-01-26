<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar236489217;

use App\Models\TestCar236489217;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar236489217 $testCar236489217;

    public function render()
    {
        $items = TestCar236489217::paginate($this->perPage);

        return view('livewire.test-car236489217.index', compact('items'));
    }

            public function delete(TestCar236489217 $testCar236489217): void
        {
                                                if ($testCar236489217->testCar21087509902s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar236489217->delete();
        }
    }
