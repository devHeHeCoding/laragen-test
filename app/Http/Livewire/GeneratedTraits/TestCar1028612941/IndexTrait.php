<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1028612941;

use App\Models\TestCar1028612941;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1028612941 $testCar1028612941;

    public function render()
    {
        $items = TestCar1028612941::paginate($this->perPage);

        return view('livewire.test-car1028612941.index', compact('items'));
    }

            public function delete(TestCar1028612941 $testCar1028612941): void
        {
                                                if ($testCar1028612941->testCar21245104015s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1028612941->delete();
        }
    }
