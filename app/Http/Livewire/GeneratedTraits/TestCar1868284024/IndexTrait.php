<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1868284024;

use App\Models\TestCar1868284024;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1868284024 $testCar1868284024;

    public function render()
    {
        $items = TestCar1868284024::paginate($this->perPage);

        return view('livewire.test-car1868284024.index', compact('items'));
    }

            public function delete(TestCar1868284024 $testCar1868284024): void
        {
                                                if ($testCar1868284024->testCar21399654296s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1868284024->delete();
        }
    }
