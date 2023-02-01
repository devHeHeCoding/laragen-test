<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar496868380;

use App\Models\TestCar496868380;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar496868380 $testCar496868380;

    public function render()
    {
        $items = TestCar496868380::paginate($this->perPage);

        return view('livewire.test-car496868380.index', compact('items'));
    }

            public function delete(TestCar496868380 $testCar496868380): void
        {
                                                if ($testCar496868380->testCar21221427718s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar496868380->delete();
        }
    }
