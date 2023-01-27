<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1622906751;

use App\Models\TestCar1622906751;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1622906751 $testCar1622906751;

    public function render()
    {
        $items = TestCar1622906751::paginate($this->perPage);

        return view('livewire.test-car1622906751.index', compact('items'));
    }

            public function delete(TestCar1622906751 $testCar1622906751): void
        {
                                                if ($testCar1622906751->testCar2982628438s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1622906751->delete();
        }
    }
