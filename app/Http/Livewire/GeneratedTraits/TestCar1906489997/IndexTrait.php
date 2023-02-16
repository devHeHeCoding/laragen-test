<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1906489997;

use App\Models\TestCar1906489997;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1906489997 $testCar1906489997;

    public function render()
    {
        $items = TestCar1906489997::paginate($this->perPage);

        return view('livewire.generated.test-car1906489997.index', compact('items'));
    }

            public function delete(TestCar1906489997 $testCar1906489997): void
        {
                                                if ($testCar1906489997->testCar21910132136s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1906489997->delete();
        }
    }
