<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar851343037;

use App\Models\TestCar851343037;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar851343037 $testCar851343037;

    public function render()
    {
        $items = TestCar851343037::paginate($this->perPage);

        return view('livewire.test-car851343037.index', compact('items'));
    }

            public function delete(TestCar851343037 $testCar851343037): void
        {
                                                if ($testCar851343037->testCar21771264889s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar851343037->delete();
        }
    }
