<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1966287723;

use App\Models\TestCar1966287723;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1966287723 $testCar1966287723;

    public function render()
    {
        $items = TestCar1966287723::paginate($this->perPage);

        return view('livewire.generated.test-car1966287723.index', compact('items'));
    }

            public function delete(TestCar1966287723 $testCar1966287723): void
        {
                                                if ($testCar1966287723->testCar2408573754s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1966287723->delete();
        }
    }
