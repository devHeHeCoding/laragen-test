<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar289518111;

use App\Models\TestCar289518111;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar289518111 $testCar289518111;

    public function render()
    {
        $items = TestCar289518111::paginate($this->perPage);

        return view('livewire.generated.test-car289518111.index', compact('items'));
    }

            public function delete(TestCar289518111 $testCar289518111): void
        {
                                                if ($testCar289518111->testCar271940798s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar289518111->delete();
        }
    }
