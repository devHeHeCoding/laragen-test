<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar761078444;

use App\Models\TestCar761078444;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar761078444 $testCar761078444;

    public function render()
    {
        $items = TestCar761078444::paginate($this->perPage);

        return view('livewire.test-car761078444.index', compact('items'));
    }

            public function delete(TestCar761078444 $testCar761078444): void
        {
                                                if ($testCar761078444->testCar2450792759s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar761078444->delete();
        }
    }
