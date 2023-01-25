<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1285989710;

use App\Models\TestCar1285989710;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1285989710 $testCar1285989710;

    public function render()
    {
        $items = TestCar1285989710::paginate($this->perPage);

        return view('livewire.test-car1285989710.index', compact('items'));
    }

            public function delete(TestCar1285989710 $testCar1285989710): void
        {
                                                if ($testCar1285989710->testCar229779167s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1285989710->delete();
        }
    }
