<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar653226235;

use App\Models\TestCar653226235;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar653226235 $testCar653226235;

    public function render()
    {
        $items = TestCar653226235::paginate($this->perPage);

        return view('livewire.test-car653226235.index', compact('items'));
    }

            public function delete(TestCar653226235 $testCar653226235): void
        {
                                                if ($testCar653226235->testCar2446506137s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar653226235->delete();
        }
    }
