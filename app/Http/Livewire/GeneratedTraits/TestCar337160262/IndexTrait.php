<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar337160262;

use App\Models\TestCar337160262;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar337160262 $testCar337160262;

    public function render()
    {
        $items = TestCar337160262::paginate($this->perPage);

        return view('livewire.test-car337160262.index', compact('items'));
    }

            public function delete(TestCar337160262 $testCar337160262): void
        {
                                                if ($testCar337160262->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar337160262->delete();
        }
    }
