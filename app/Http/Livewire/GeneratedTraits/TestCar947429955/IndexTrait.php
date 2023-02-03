<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar947429955;

use App\Models\TestCar947429955;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar947429955 $testCar947429955;

    public function render()
    {
        $items = TestCar947429955::paginate($this->perPage);

        return view('livewire.test-car947429955.index', compact('items'));
    }

            public function delete(TestCar947429955 $testCar947429955): void
        {
                                                if ($testCar947429955->testCar21060951672s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar947429955->delete();
        }
    }
