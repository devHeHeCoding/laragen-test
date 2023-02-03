<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1083031205;

use App\Models\TestCar1083031205;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1083031205 $testCar1083031205;

    public function render()
    {
        $items = TestCar1083031205::paginate($this->perPage);

        return view('livewire.test-car1083031205.index', compact('items'));
    }

            public function delete(TestCar1083031205 $testCar1083031205): void
        {
                                                if ($testCar1083031205->testCar21768873857s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1083031205->delete();
        }
    }
