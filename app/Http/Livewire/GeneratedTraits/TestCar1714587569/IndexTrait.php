<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1714587569;

use App\Models\TestCar1714587569;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1714587569 $testCar1714587569;

    public function render()
    {
        $items = TestCar1714587569::paginate($this->perPage);

        return view('livewire.test-car1714587569.index', compact('items'));
    }

            public function delete(TestCar1714587569 $testCar1714587569): void
        {
                                                if ($testCar1714587569->testCar21682186286s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1714587569->delete();
        }
    }
