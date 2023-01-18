<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1107132491;

use App\Models\TestCar1107132491;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1107132491 $testCar1107132491;

    public function render()
    {
        $items = TestCar1107132491::paginate($this->perPage);

        return view('livewire.test-car1107132491.index', compact('items'));
    }

            public function delete(TestCar1107132491 $testCar1107132491): void
        {
                                                if ($testCar1107132491->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1107132491->delete();
        }
    }
