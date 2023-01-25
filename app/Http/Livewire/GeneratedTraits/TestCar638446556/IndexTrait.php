<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar638446556;

use App\Models\TestCar638446556;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar638446556 $testCar638446556;

    public function render()
    {
        $items = TestCar638446556::paginate($this->perPage);

        return view('livewire.test-car638446556.index', compact('items'));
    }

            public function delete(TestCar638446556 $testCar638446556): void
        {
                                                if ($testCar638446556->testCar21856620769s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar638446556->delete();
        }
    }
