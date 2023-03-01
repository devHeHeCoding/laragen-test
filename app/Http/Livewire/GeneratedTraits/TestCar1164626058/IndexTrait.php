<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1164626058;

use App\Models\TestCar1164626058;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1164626058 $testCar1164626058;

    public function render()
    {
        $items = TestCar1164626058::paginate($this->perPage);

        return view('livewire.generated.test-car1164626058.index', compact('items'));
    }

            public function delete(TestCar1164626058 $testCar1164626058): void
        {
                                                if ($testCar1164626058->testCar2961874058s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1164626058->delete();
        }
    }
