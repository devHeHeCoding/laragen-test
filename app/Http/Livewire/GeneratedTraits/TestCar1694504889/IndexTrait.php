<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1694504889;

use App\Models\TestCar1694504889;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1694504889 $testCar1694504889;

    public function render()
    {
        $items = TestCar1694504889::paginate($this->perPage);

        return view('livewire.test-car1694504889.index', compact('items'));
    }

            public function delete(TestCar1694504889 $testCar1694504889): void
        {
                                                if ($testCar1694504889->testCar2222861139s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1694504889->delete();
        }
    }
