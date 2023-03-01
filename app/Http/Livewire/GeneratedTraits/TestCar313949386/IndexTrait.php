<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar313949386;

use App\Models\TestCar313949386;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar313949386 $testCar313949386;

    public function render()
    {
        $items = TestCar313949386::paginate($this->perPage);

        return view('livewire.generated.test-car313949386.index', compact('items'));
    }

            public function delete(TestCar313949386 $testCar313949386): void
        {
                                                if ($testCar313949386->testCar295506739s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar313949386->delete();
        }
    }
