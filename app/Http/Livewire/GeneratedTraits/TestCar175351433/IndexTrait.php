<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar175351433;

use App\Models\TestCar175351433;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar175351433 $testCar175351433;

    public function render()
    {
        $items = TestCar175351433::paginate($this->perPage);

        return view('livewire.generated.test-car175351433.index', compact('items'));
    }

            public function delete(TestCar175351433 $testCar175351433): void
        {
                                                if ($testCar175351433->testCar290749005s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar175351433->delete();
        }
    }
