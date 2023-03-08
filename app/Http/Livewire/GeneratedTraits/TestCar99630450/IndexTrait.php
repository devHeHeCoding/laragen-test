<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar99630450;

use App\Models\TestCar99630450;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar99630450 $testCar99630450;

    public function render()
    {
        $items = TestCar99630450::paginate($this->perPage);

        return view('livewire.generated.test-car99630450.index', compact('items'));
    }

            public function delete(TestCar99630450 $testCar99630450): void
        {
                                                if ($testCar99630450->testCar2693648679s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar99630450->delete();
        }
    }
