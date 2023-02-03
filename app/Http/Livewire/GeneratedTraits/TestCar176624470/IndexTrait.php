<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar176624470;

use App\Models\TestCar176624470;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar176624470 $testCar176624470;

    public function render()
    {
        $items = TestCar176624470::paginate($this->perPage);

        return view('livewire.test-car176624470.index', compact('items'));
    }

            public function delete(TestCar176624470 $testCar176624470): void
        {
                                                if ($testCar176624470->testCar2595524071s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar176624470->delete();
        }
    }
