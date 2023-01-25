<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar96023851;

use App\Models\TestCar96023851;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar96023851 $testCar96023851;

    public function render()
    {
        $items = TestCar96023851::paginate($this->perPage);

        return view('livewire.test-car96023851.index', compact('items'));
    }

            public function delete(TestCar96023851 $testCar96023851): void
        {
                                                if ($testCar96023851->testCar21010105638s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar96023851->delete();
        }
    }
