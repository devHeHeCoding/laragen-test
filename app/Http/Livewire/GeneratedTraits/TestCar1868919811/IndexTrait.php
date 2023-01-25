<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1868919811;

use App\Models\TestCar1868919811;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1868919811 $testCar1868919811;

    public function render()
    {
        $items = TestCar1868919811::paginate($this->perPage);

        return view('livewire.test-car1868919811.index', compact('items'));
    }

            public function delete(TestCar1868919811 $testCar1868919811): void
        {
                                                if ($testCar1868919811->testCar21318176695s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1868919811->delete();
        }
    }
