<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1142857027;

use App\Models\TestCar1142857027;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1142857027 $testCar1142857027;

    public function render()
    {
        $items = TestCar1142857027::paginate($this->perPage);

        return view('livewire.test-car1142857027.index', compact('items'));
    }

            public function delete(TestCar1142857027 $testCar1142857027): void
        {
                                                if ($testCar1142857027->testCar22021787306s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1142857027->delete();
        }
    }
