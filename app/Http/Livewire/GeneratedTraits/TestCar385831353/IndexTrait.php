<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar385831353;

use App\Models\TestCar385831353;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar385831353 $testCar385831353;

    public function render()
    {
        $items = TestCar385831353::paginate($this->perPage);

        return view('livewire.generate.test-car385831353.index', compact('items'));
    }

            public function delete(TestCar385831353 $testCar385831353): void
        {
                                                if ($testCar385831353->testCar2879920396s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar385831353->delete();
        }
    }
