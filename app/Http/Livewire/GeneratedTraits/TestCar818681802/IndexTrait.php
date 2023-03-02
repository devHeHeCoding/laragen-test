<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar818681802;

use App\Models\TestCar818681802;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar818681802 $testCar818681802;

    public function render()
    {
        $items = TestCar818681802::paginate($this->perPage);

        return view('livewire.generated.test-car818681802.index', compact('items'));
    }

            public function delete(TestCar818681802 $testCar818681802): void
        {
                                                if ($testCar818681802->testCar2701007895s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar818681802->delete();
        }
    }
