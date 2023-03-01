<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar469150571;

use App\Models\TestCar469150571;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar469150571 $testCar469150571;

    public function render()
    {
        $items = TestCar469150571::paginate($this->perPage);

        return view('livewire.generated.test-car469150571.index', compact('items'));
    }

            public function delete(TestCar469150571 $testCar469150571): void
        {
                                                if ($testCar469150571->testCar2539510607s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar469150571->delete();
        }
    }
