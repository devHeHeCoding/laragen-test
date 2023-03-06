<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1320179828;

use App\Models\TestCar1320179828;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1320179828 $testCar1320179828;

    public function render()
    {
        $items = TestCar1320179828::paginate($this->perPage);

        return view('livewire.generated.test-car1320179828.index', compact('items'));
    }

            public function delete(TestCar1320179828 $testCar1320179828): void
        {
                                                if ($testCar1320179828->testCar2486895702s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1320179828->delete();
        }
    }
