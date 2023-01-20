<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1234875917;

use App\Models\TestCar1234875917;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1234875917 $testCar1234875917;

    public function render()
    {
        $items = TestCar1234875917::paginate($this->perPage);

        return view('livewire.test-car1234875917.index', compact('items'));
    }

            public function delete(TestCar1234875917 $testCar1234875917): void
        {
                                                if ($testCar1234875917->testCar2832278089s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1234875917->delete();
        }
    }
