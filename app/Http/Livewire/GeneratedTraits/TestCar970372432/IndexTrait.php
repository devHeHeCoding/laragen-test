<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar970372432;

use App\Models\TestCar970372432;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar970372432 $testCar970372432;

    public function render()
    {
        $items = TestCar970372432::paginate($this->perPage);

        return view('livewire.test-car970372432.index', compact('items'));
    }

            public function delete(TestCar970372432 $testCar970372432): void
        {
                                                if ($testCar970372432->testCar2119323290s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar970372432->delete();
        }
    }
