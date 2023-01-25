<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1727222775;

use App\Models\TestCar1727222775;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1727222775 $testCar1727222775;

    public function render()
    {
        $items = TestCar1727222775::paginate($this->perPage);

        return view('livewire.test-car1727222775.index', compact('items'));
    }

            public function delete(TestCar1727222775 $testCar1727222775): void
        {
                                                if ($testCar1727222775->testCar21567329259s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1727222775->delete();
        }
    }
