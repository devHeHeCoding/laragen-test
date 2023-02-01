<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1677932393;

use App\Models\TestCar1677932393;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1677932393 $testCar1677932393;

    public function render()
    {
        $items = TestCar1677932393::paginate($this->perPage);

        return view('livewire.test-car1677932393.index', compact('items'));
    }

            public function delete(TestCar1677932393 $testCar1677932393): void
        {
                                                if ($testCar1677932393->testCar21267361011s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1677932393->delete();
        }
    }
