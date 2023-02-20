<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1110355267;

use App\Models\TestCar1110355267;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1110355267 $testCar1110355267;

    public function render()
    {
        $items = TestCar1110355267::paginate($this->perPage);

        return view('livewire.generated.test-car1110355267.index', compact('items'));
    }

            public function delete(TestCar1110355267 $testCar1110355267): void
        {
                                                if ($testCar1110355267->testCar2300018130s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1110355267->delete();
        }
    }
