<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar861605239;

use App\Models\TestCar861605239;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar861605239 $testCar861605239;

    public function render()
    {
        $items = TestCar861605239::paginate($this->perPage);

        return view('livewire.test-car861605239.index', compact('items'));
    }

            public function delete(TestCar861605239 $testCar861605239): void
        {
                                                if ($testCar861605239->testCar21751762608s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar861605239->delete();
        }
    }
