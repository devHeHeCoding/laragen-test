<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar68996410;

use App\Models\TestCar68996410;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar68996410 $testCar68996410;

    public function render()
    {
        $items = TestCar68996410::paginate($this->perPage);

        return view('livewire.generated.test-car68996410.index', compact('items'));
    }

            public function delete(TestCar68996410 $testCar68996410): void
        {
                                                if ($testCar68996410->testCar21309452577s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar68996410->delete();
        }
    }
