<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1818946289;

use App\Models\TestCar1818946289;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1818946289 $testCar1818946289;

    public function render()
    {
        $items = TestCar1818946289::paginate($this->perPage);

        return view('livewire.test-car1818946289.index', compact('items'));
    }

            public function delete(TestCar1818946289 $testCar1818946289): void
        {
                                                if ($testCar1818946289->testCar2849272622s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1818946289->delete();
        }
    }
