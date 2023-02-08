<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar342094486;

use App\Models\TestCar342094486;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar342094486 $testCar342094486;

    public function render()
    {
        $items = TestCar342094486::paginate($this->perPage);

        return view('livewire.generated.test-car342094486.index', compact('items'));
    }

            public function delete(TestCar342094486 $testCar342094486): void
        {
                                                if ($testCar342094486->testCar2284973861s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar342094486->delete();
        }
    }
