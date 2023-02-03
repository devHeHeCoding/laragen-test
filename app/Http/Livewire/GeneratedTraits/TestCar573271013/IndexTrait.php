<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar573271013;

use App\Models\TestCar573271013;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar573271013 $testCar573271013;

    public function render()
    {
        $items = TestCar573271013::paginate($this->perPage);

        return view('livewire.test-car573271013.index', compact('items'));
    }

            public function delete(TestCar573271013 $testCar573271013): void
        {
                                                if ($testCar573271013->testCar2782255245s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar573271013->delete();
        }
    }
