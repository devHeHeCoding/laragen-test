<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2120781035;

use App\Models\TestCar2120781035;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2120781035 $testCar2120781035;

    public function render()
    {
        $items = TestCar2120781035::paginate($this->perPage);

        return view('livewire.generated.test-car2120781035.index', compact('items'));
    }

            public function delete(TestCar2120781035 $testCar2120781035): void
        {
                                                if ($testCar2120781035->testCar2405675999s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2120781035->delete();
        }
    }
