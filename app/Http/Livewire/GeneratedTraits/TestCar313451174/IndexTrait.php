<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar313451174;

use App\Models\TestCar313451174;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar313451174 $testCar313451174;

    public function render()
    {
        $items = TestCar313451174::paginate($this->perPage);

        return view('livewire.test-car313451174.index', compact('items'));
    }

            public function delete(TestCar313451174 $testCar313451174): void
        {
                                                if ($testCar313451174->testCar21288117286s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar313451174->delete();
        }
    }
