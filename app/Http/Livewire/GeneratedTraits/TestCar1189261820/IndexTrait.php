<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1189261820;

use App\Models\TestCar1189261820;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1189261820 $testCar1189261820;

    public function render()
    {
        $items = TestCar1189261820::paginate($this->perPage);

        return view('livewire.test-car1189261820.index', compact('items'));
    }

            public function delete(TestCar1189261820 $testCar1189261820): void
        {
                                                if ($testCar1189261820->testCar2252035748s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1189261820->delete();
        }
    }
