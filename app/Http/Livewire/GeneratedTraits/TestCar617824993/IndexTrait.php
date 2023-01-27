<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar617824993;

use App\Models\TestCar617824993;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar617824993 $testCar617824993;

    public function render()
    {
        $items = TestCar617824993::paginate($this->perPage);

        return view('livewire.test-car617824993.index', compact('items'));
    }

            public function delete(TestCar617824993 $testCar617824993): void
        {
                                                if ($testCar617824993->testCar2338533203s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar617824993->delete();
        }
    }
