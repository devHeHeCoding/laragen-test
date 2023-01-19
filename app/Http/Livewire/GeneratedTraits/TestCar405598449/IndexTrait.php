<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar405598449;

use App\Models\TestCar405598449;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar405598449 $testCar405598449;

    public function render()
    {
        $items = TestCar405598449::paginate($this->perPage);

        return view('livewire.test-car405598449.index', compact('items'));
    }

            public function delete(TestCar405598449 $testCar405598449): void
        {
                                                if ($testCar405598449->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar405598449->delete();
        }
    }
