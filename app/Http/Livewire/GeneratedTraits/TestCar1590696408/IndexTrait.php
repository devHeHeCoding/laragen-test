<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1590696408;

use App\Models\TestCar1590696408;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1590696408 $testCar1590696408;

    public function render()
    {
        $items = TestCar1590696408::paginate($this->perPage);

        return view('livewire.generated.test-car1590696408.index', compact('items'));
    }

            public function delete(TestCar1590696408 $testCar1590696408): void
        {
                                                if ($testCar1590696408->testCar2359090084s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1590696408->delete();
        }
    }
