<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2025907584;

use App\Models\TestCar2025907584;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2025907584 $testCar2025907584;

    public function render()
    {
        $items = TestCar2025907584::paginate($this->perPage);

        return view('livewire.test-car2025907584.index', compact('items'));
    }

            public function delete(TestCar2025907584 $testCar2025907584): void
        {
                                                if ($testCar2025907584->testCar21224436154s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2025907584->delete();
        }
    }
