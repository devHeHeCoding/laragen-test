<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1570150971;

use App\Models\TestCar1570150971;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1570150971 $testCar1570150971;

    public function render()
    {
        $items = TestCar1570150971::paginate($this->perPage);

        return view('livewire.test-car1570150971.index', compact('items'));
    }

            public function delete(TestCar1570150971 $testCar1570150971): void
        {
                                                if ($testCar1570150971->testCar21245141947s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1570150971->delete();
        }
    }
