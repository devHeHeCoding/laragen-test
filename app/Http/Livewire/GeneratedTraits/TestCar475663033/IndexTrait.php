<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar475663033;

use App\Models\TestCar475663033;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar475663033 $testCar475663033;

    public function render()
    {
        $items = TestCar475663033::paginate($this->perPage);

        return view('livewire.generated.test-car475663033.index', compact('items'));
    }

            public function delete(TestCar475663033 $testCar475663033): void
        {
                                                if ($testCar475663033->testCar277303995s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar475663033->delete();
        }
    }
