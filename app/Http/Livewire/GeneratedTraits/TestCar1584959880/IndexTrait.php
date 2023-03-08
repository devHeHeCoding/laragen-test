<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1584959880;

use App\Models\TestCar1584959880;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1584959880 $testCar1584959880;

    public function render()
    {
        $items = TestCar1584959880::paginate($this->perPage);

        return view('livewire.generated.test-car1584959880.index', compact('items'));
    }

            public function delete(TestCar1584959880 $testCar1584959880): void
        {
                                                if ($testCar1584959880->testCar21009707085s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1584959880->delete();
        }
    }
