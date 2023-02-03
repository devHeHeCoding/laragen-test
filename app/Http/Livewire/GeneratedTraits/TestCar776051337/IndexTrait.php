<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar776051337;

use App\Models\TestCar776051337;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar776051337 $testCar776051337;

    public function render()
    {
        $items = TestCar776051337::paginate($this->perPage);

        return view('livewire.test-car776051337.index', compact('items'));
    }

            public function delete(TestCar776051337 $testCar776051337): void
        {
                                                if ($testCar776051337->testCar2242812109s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar776051337->delete();
        }
    }
