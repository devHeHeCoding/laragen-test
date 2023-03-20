<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar17145504;

use App\Models\TestCar17145504;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar17145504 $testCar17145504;

    public function render()
    {
        $items = TestCar17145504::paginate($this->perPage);

        return view('livewire.generated.test-car17145504.index', compact('items'));
    }

            public function delete(TestCar17145504 $testCar17145504): void
        {
                                                if ($testCar17145504->testCar21354509004s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar17145504->delete();
        }
    }
