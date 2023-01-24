<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar556394034;

use App\Models\TestCar556394034;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar556394034 $testCar556394034;

    public function render()
    {
        $items = TestCar556394034::paginate($this->perPage);

        return view('livewire.test-car556394034.index', compact('items'));
    }

            public function delete(TestCar556394034 $testCar556394034): void
        {
                                                if ($testCar556394034->testCar21818832869s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar556394034->delete();
        }
    }
