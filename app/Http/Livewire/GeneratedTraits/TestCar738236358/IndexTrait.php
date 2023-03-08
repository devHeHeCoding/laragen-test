<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738236358;

use App\Models\TestCar738236358;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar738236358 $testCar738236358;

    public function render()
    {
        $items = TestCar738236358::paginate($this->perPage);

        return view('livewire.generated.test-car738236358.index', compact('items'));
    }

            public function delete(TestCar738236358 $testCar738236358): void
        {
                                                if ($testCar738236358->testCar283778670s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar738236358->delete();
        }
    }
