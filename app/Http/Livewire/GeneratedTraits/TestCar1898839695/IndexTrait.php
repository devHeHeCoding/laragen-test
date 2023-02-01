<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1898839695;

use App\Models\TestCar1898839695;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1898839695 $testCar1898839695;

    public function render()
    {
        $items = TestCar1898839695::paginate($this->perPage);

        return view('livewire.test-car1898839695.index', compact('items'));
    }

            public function delete(TestCar1898839695 $testCar1898839695): void
        {
                                                if ($testCar1898839695->testCar2322379361s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1898839695->delete();
        }
    }
