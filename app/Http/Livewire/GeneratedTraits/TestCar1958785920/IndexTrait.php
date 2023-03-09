<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1958785920;

use App\Models\TestCar1958785920;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1958785920 $testCar1958785920;

    public function render()
    {
        $items = TestCar1958785920::paginate($this->perPage);

        return view('livewire.generated.test-car1958785920.index', compact('items'));
    }

            public function delete(TestCar1958785920 $testCar1958785920): void
        {
                                                if ($testCar1958785920->testCar21828901928s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1958785920->delete();
        }
    }
