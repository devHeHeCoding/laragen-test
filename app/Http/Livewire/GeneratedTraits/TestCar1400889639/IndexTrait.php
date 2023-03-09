<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1400889639;

use App\Models\TestCar1400889639;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1400889639 $testCar1400889639;

    public function render()
    {
        $items = TestCar1400889639::paginate($this->perPage);

        return view('livewire.generated.test-car1400889639.index', compact('items'));
    }

            public function delete(TestCar1400889639 $testCar1400889639): void
        {
                                                if ($testCar1400889639->testCar21871893536s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1400889639->delete();
        }
    }
