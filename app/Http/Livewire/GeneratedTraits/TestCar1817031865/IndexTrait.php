<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1817031865;

use App\Models\TestCar1817031865;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1817031865 $testCar1817031865;

    public function render()
    {
        $items = TestCar1817031865::paginate($this->perPage);

        return view('livewire.generated.test-car1817031865.index', compact('items'));
    }

            public function delete(TestCar1817031865 $testCar1817031865): void
        {
                                                if ($testCar1817031865->testCar21220430729s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1817031865->delete();
        }
    }
