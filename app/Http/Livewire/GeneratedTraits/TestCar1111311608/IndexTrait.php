<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1111311608;

use App\Models\TestCar1111311608;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1111311608 $testCar1111311608;

    public function render()
    {
        $items = TestCar1111311608::paginate($this->perPage);

        return view('livewire.test-car1111311608.index', compact('items'));
    }

            public function delete(TestCar1111311608 $testCar1111311608): void
        {
                                                if ($testCar1111311608->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1111311608->delete();
        }
    }
