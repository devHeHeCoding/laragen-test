<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1336775676;

use App\Models\TestCar1336775676;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1336775676 $testCar1336775676;

    public function render()
    {
        $items = TestCar1336775676::paginate($this->perPage);

        return view('livewire.generated.test-car1336775676.index', compact('items'));
    }

            public function delete(TestCar1336775676 $testCar1336775676): void
        {
                                                if ($testCar1336775676->testCar2482949993s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1336775676->delete();
        }
    }
