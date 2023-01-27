<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1398032284;

use App\Models\TestCar1398032284;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1398032284 $testCar1398032284;

    public function render()
    {
        $items = TestCar1398032284::paginate($this->perPage);

        return view('livewire.test-car1398032284.index', compact('items'));
    }

            public function delete(TestCar1398032284 $testCar1398032284): void
        {
                                                if ($testCar1398032284->testCar2472045578s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1398032284->delete();
        }
    }
