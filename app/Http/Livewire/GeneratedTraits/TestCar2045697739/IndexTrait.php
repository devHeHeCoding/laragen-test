<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2045697739;

use App\Models\TestCar2045697739;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2045697739 $testCar2045697739;

    public function render()
    {
        $items = TestCar2045697739::paginate($this->perPage);

        return view('livewire.generated.test-car2045697739.index', compact('items'));
    }

            public function delete(TestCar2045697739 $testCar2045697739): void
        {
                                                if ($testCar2045697739->testCar21085507558s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2045697739->delete();
        }
    }
