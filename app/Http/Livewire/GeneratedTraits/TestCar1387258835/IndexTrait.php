<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1387258835;

use App\Models\TestCar1387258835;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1387258835 $testCar1387258835;

    public function render()
    {
        $items = TestCar1387258835::paginate($this->perPage);

        return view('livewire.test-car1387258835.index', compact('items'));
    }

            public function delete(TestCar1387258835 $testCar1387258835): void
        {
                                                if ($testCar1387258835->testCar2607957766s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1387258835->delete();
        }
    }
