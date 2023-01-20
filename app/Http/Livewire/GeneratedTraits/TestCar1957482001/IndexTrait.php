<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1957482001;

use App\Models\TestCar1957482001;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1957482001 $testCar1957482001;

    public function render()
    {
        $items = TestCar1957482001::paginate($this->perPage);

        return view('livewire.test-car1957482001.index', compact('items'));
    }

            public function delete(TestCar1957482001 $testCar1957482001): void
        {
                                                if ($testCar1957482001->testCar21358620237s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1957482001->delete();
        }
    }
