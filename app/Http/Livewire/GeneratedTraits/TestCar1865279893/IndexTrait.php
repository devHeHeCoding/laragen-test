<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1865279893;

use App\Models\TestCar1865279893;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1865279893 $testCar1865279893;

    public function render()
    {
        $items = TestCar1865279893::paginate($this->perPage);

        return view('livewire.test-car1865279893.index', compact('items'));
    }

            public function delete(TestCar1865279893 $testCar1865279893): void
        {
                                                if ($testCar1865279893->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1865279893->delete();
        }
    }
