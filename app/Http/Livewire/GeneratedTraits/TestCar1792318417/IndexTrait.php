<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1792318417;

use App\Models\TestCar1792318417;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1792318417 $testCar1792318417;

    public function render()
    {
        $items = TestCar1792318417::paginate($this->perPage);

        return view('livewire.test-car1792318417.index', compact('items'));
    }

            public function delete(TestCar1792318417 $testCar1792318417): void
        {
                                                if ($testCar1792318417->testCar21456813617s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1792318417->delete();
        }
    }
