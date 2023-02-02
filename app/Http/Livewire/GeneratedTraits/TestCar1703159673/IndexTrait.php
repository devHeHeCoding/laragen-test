<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1703159673;

use App\Models\TestCar1703159673;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1703159673 $testCar1703159673;

    public function render()
    {
        $items = TestCar1703159673::paginate($this->perPage);

        return view('livewire.test-car1703159673.index', compact('items'));
    }

            public function delete(TestCar1703159673 $testCar1703159673): void
        {
                                                if ($testCar1703159673->testCar22017748347s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1703159673->delete();
        }
    }
