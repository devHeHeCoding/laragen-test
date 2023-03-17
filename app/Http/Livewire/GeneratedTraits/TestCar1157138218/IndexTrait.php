<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1157138218;

use App\Models\TestCar1157138218;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1157138218 $testCar1157138218;

    public function render()
    {
        $items = TestCar1157138218::paginate($this->perPage);

        return view('livewire.generated.test-car1157138218.index', compact('items'));
    }

            public function delete(TestCar1157138218 $testCar1157138218): void
        {
                                                if ($testCar1157138218->testCar2116566326s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1157138218->delete();
        }
    }
