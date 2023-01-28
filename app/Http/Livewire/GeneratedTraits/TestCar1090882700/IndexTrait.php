<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1090882700;

use App\Models\TestCar1090882700;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1090882700 $testCar1090882700;

    public function render()
    {
        $items = TestCar1090882700::paginate($this->perPage);

        return view('livewire.test-car1090882700.index', compact('items'));
    }

            public function delete(TestCar1090882700 $testCar1090882700): void
        {
                                                if ($testCar1090882700->testCar21089212264s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1090882700->delete();
        }
    }
