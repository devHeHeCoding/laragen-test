<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2114012326;

use App\Models\TestCar2114012326;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2114012326 $testCar2114012326;

    public function render()
    {
        $items = TestCar2114012326::paginate($this->perPage);

        return view('livewire.test-car2114012326.index', compact('items'));
    }

            public function delete(TestCar2114012326 $testCar2114012326): void
        {
                                                if ($testCar2114012326->testCar21668418276s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2114012326->delete();
        }
    }
