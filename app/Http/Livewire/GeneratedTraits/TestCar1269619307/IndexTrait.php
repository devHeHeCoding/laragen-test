<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1269619307;

use App\Models\TestCar1269619307;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1269619307 $testCar1269619307;

    public function render()
    {
        $items = TestCar1269619307::paginate($this->perPage);

        return view('livewire.test-car1269619307.index', compact('items'));
    }

            public function delete(TestCar1269619307 $testCar1269619307): void
        {
                                                if ($testCar1269619307->testCar21666624633s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1269619307->delete();
        }
    }
