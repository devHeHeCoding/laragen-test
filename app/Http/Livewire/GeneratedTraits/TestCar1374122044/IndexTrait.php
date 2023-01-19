<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1374122044;

use App\Models\TestCar1374122044;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1374122044 $testCar1374122044;

    public function render()
    {
        $items = TestCar1374122044::paginate($this->perPage);

        return view('livewire.test-car1374122044.index', compact('items'));
    }

            public function delete(TestCar1374122044 $testCar1374122044): void
        {
                                                if ($testCar1374122044->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1374122044->delete();
        }
    }
