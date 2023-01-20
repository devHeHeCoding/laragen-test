<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2128814019;

use App\Models\TestCar2128814019;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2128814019 $testCar2128814019;

    public function render()
    {
        $items = TestCar2128814019::paginate($this->perPage);

        return view('livewire.test-car2128814019.index', compact('items'));
    }

            public function delete(TestCar2128814019 $testCar2128814019): void
        {
                                                if ($testCar2128814019->testCar21711982605s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2128814019->delete();
        }
    }
