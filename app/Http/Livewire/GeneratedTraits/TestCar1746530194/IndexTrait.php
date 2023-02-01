<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1746530194;

use App\Models\TestCar1746530194;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1746530194 $testCar1746530194;

    public function render()
    {
        $items = TestCar1746530194::paginate($this->perPage);

        return view('livewire.test-car1746530194.index', compact('items'));
    }

            public function delete(TestCar1746530194 $testCar1746530194): void
        {
                                                if ($testCar1746530194->testCar21104919880s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1746530194->delete();
        }
    }
