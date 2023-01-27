<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1852098213;

use App\Models\TestCar1852098213;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1852098213 $testCar1852098213;

    public function render()
    {
        $items = TestCar1852098213::paginate($this->perPage);

        return view('livewire.test-car1852098213.index', compact('items'));
    }

            public function delete(TestCar1852098213 $testCar1852098213): void
        {
                                                if ($testCar1852098213->testCar2421608141s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1852098213->delete();
        }
    }
