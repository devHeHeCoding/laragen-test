<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1426086887;

use App\Models\TestCar1426086887;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1426086887 $testCar1426086887;

    public function render()
    {
        $items = TestCar1426086887::paginate($this->perPage);

        return view('livewire.test-car1426086887.index', compact('items'));
    }

            public function delete(TestCar1426086887 $testCar1426086887): void
        {
                                                if ($testCar1426086887->testCar2250405027s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1426086887->delete();
        }
    }
