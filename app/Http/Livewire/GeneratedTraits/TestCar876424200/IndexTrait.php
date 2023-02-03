<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar876424200;

use App\Models\TestCar876424200;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar876424200 $testCar876424200;

    public function render()
    {
        $items = TestCar876424200::paginate($this->perPage);

        return view('livewire.test-car876424200.index', compact('items'));
    }

            public function delete(TestCar876424200 $testCar876424200): void
        {
                                                if ($testCar876424200->testCar2330027336s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar876424200->delete();
        }
    }
