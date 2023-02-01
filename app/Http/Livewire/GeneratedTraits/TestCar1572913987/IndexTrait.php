<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1572913987;

use App\Models\TestCar1572913987;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1572913987 $testCar1572913987;

    public function render()
    {
        $items = TestCar1572913987::paginate($this->perPage);

        return view('livewire.test-car1572913987.index', compact('items'));
    }

            public function delete(TestCar1572913987 $testCar1572913987): void
        {
                                                if ($testCar1572913987->testCar2328349200s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1572913987->delete();
        }
    }
