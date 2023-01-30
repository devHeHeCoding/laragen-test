<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar898297423;

use App\Models\TestCar898297423;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar898297423 $testCar898297423;

    public function render()
    {
        $items = TestCar898297423::paginate($this->perPage);

        return view('livewire.test-car898297423.index', compact('items'));
    }

            public function delete(TestCar898297423 $testCar898297423): void
        {
                                                if ($testCar898297423->testCar2916439629s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar898297423->delete();
        }
    }
