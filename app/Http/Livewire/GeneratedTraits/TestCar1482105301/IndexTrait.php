<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1482105301;

use App\Models\TestCar1482105301;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1482105301 $testCar1482105301;

    public function render()
    {
        $items = TestCar1482105301::paginate($this->perPage);

        return view('livewire.generated.test-car1482105301.index', compact('items'));
    }

            public function delete(TestCar1482105301 $testCar1482105301): void
        {
                                                if ($testCar1482105301->testCar21587661393s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1482105301->delete();
        }
    }
