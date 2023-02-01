<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1677949319;

use App\Models\TestCar1677949319;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1677949319 $testCar1677949319;

    public function render()
    {
        $items = TestCar1677949319::paginate($this->perPage);

        return view('livewire.test-car1677949319.index', compact('items'));
    }

            public function delete(TestCar1677949319 $testCar1677949319): void
        {
                                                if ($testCar1677949319->testCar2597086083s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1677949319->delete();
        }
    }
