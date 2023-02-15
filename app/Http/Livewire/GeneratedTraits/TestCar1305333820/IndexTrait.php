<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1305333820;

use App\Models\TestCar1305333820;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1305333820 $testCar1305333820;

    public function render()
    {
        $items = TestCar1305333820::paginate($this->perPage);

        return view('livewire.generated.test-car1305333820.index', compact('items'));
    }

            public function delete(TestCar1305333820 $testCar1305333820): void
        {
                                                if ($testCar1305333820->testCar21031309077s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1305333820->delete();
        }
    }
