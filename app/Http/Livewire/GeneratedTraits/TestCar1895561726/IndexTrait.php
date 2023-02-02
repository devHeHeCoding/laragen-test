<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1895561726;

use App\Models\TestCar1895561726;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1895561726 $testCar1895561726;

    public function render()
    {
        $items = TestCar1895561726::paginate($this->perPage);

        return view('livewire.test-car1895561726.index', compact('items'));
    }

            public function delete(TestCar1895561726 $testCar1895561726): void
        {
                                                if ($testCar1895561726->testCar21521418617s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1895561726->delete();
        }
    }
