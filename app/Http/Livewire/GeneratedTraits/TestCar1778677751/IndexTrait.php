<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1778677751;

use App\Models\TestCar1778677751;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1778677751 $testCar1778677751;

    public function render()
    {
        $items = TestCar1778677751::paginate($this->perPage);

        return view('livewire.generated.test-car1778677751.index', compact('items'));
    }

            public function delete(TestCar1778677751 $testCar1778677751): void
        {
                                                if ($testCar1778677751->testCar21069521790s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1778677751->delete();
        }
    }
