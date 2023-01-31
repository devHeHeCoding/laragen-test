<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1230195362;

use App\Models\TestCar1230195362;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1230195362 $testCar1230195362;

    public function render()
    {
        $items = TestCar1230195362::paginate($this->perPage);

        return view('livewire.test-car1230195362.index', compact('items'));
    }

            public function delete(TestCar1230195362 $testCar1230195362): void
        {
                                                if ($testCar1230195362->testCar2805764931s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1230195362->delete();
        }
    }
