<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1387683857;

use App\Models\TestCar1387683857;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1387683857 $testCar1387683857;

    public function render()
    {
        $items = TestCar1387683857::paginate($this->perPage);

        return view('livewire.generated.test-car1387683857.index', compact('items'));
    }

            public function delete(TestCar1387683857 $testCar1387683857): void
        {
                                                if ($testCar1387683857->testCar21794638232s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1387683857->delete();
        }
    }
