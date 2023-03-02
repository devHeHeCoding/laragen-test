<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar811601916;

use App\Models\TestCar811601916;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar811601916 $testCar811601916;

    public function render()
    {
        $items = TestCar811601916::paginate($this->perPage);

        return view('livewire.generated.test-car811601916.index', compact('items'));
    }

            public function delete(TestCar811601916 $testCar811601916): void
        {
                                                if ($testCar811601916->testCar21592964455s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar811601916->delete();
        }
    }
