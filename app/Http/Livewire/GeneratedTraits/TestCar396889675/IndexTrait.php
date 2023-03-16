<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar396889675;

use App\Models\TestCar396889675;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar396889675 $testCar396889675;

    public function render()
    {
        $items = TestCar396889675::paginate($this->perPage);

        return view('livewire.generated.test-car396889675.index', compact('items'));
    }

            public function delete(TestCar396889675 $testCar396889675): void
        {
                                                if ($testCar396889675->testCar22051749500s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar396889675->delete();
        }
    }
