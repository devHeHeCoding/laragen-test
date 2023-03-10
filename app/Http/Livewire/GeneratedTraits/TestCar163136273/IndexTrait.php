<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar163136273;

use App\Models\TestCar163136273;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar163136273 $testCar163136273;

    public function render()
    {
        $items = TestCar163136273::paginate($this->perPage);

        return view('livewire.generated.test-car163136273.index', compact('items'));
    }

            public function delete(TestCar163136273 $testCar163136273): void
        {
                                                if ($testCar163136273->testCar2432057315s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar163136273->delete();
        }
    }
