<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar396729212;

use App\Models\TestCar396729212;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar396729212 $testCar396729212;

    public function render()
    {
        $items = TestCar396729212::paginate($this->perPage);

        return view('livewire.test-car396729212.index', compact('items'));
    }

            public function delete(TestCar396729212 $testCar396729212): void
        {
                                                if ($testCar396729212->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar396729212->delete();
        }
    }
