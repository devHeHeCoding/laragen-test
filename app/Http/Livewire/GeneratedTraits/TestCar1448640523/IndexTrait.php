<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1448640523;

use App\Models\TestCar1448640523;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1448640523 $testCar1448640523;

    public function render()
    {
        $items = TestCar1448640523::paginate($this->perPage);

        return view('livewire.test-car1448640523.index', compact('items'));
    }

            public function delete(TestCar1448640523 $testCar1448640523): void
        {
                                                if ($testCar1448640523->testCar2554651105s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1448640523->delete();
        }
    }
