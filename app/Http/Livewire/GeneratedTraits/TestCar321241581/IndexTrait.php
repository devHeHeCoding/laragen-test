<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar321241581;

use App\Models\TestCar321241581;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar321241581 $testCar321241581;

    public function render()
    {
        $items = TestCar321241581::paginate($this->perPage);

        return view('livewire.test-car321241581.index', compact('items'));
    }

            public function delete(TestCar321241581 $testCar321241581): void
        {
                                                if ($testCar321241581->testCar21509269718s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar321241581->delete();
        }
    }
