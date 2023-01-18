<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2104781049;

use App\Models\TestCar2104781049;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2104781049 $testCar2104781049;

    public function render()
    {
        $items = TestCar2104781049::paginate($this->perPage);

        return view('livewire.test-car2104781049.index', compact('items'));
    }

            public function delete(TestCar2104781049 $testCar2104781049): void
        {
                                                if ($testCar2104781049->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar2104781049->delete();
        }
    }
