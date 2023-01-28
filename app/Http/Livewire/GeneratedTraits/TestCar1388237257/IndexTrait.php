<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1388237257;

use App\Models\TestCar1388237257;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1388237257 $testCar1388237257;

    public function render()
    {
        $items = TestCar1388237257::paginate($this->perPage);

        return view('livewire.test-car1388237257.index', compact('items'));
    }

            public function delete(TestCar1388237257 $testCar1388237257): void
        {
                                                if ($testCar1388237257->testCar2901332288s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1388237257->delete();
        }
    }
