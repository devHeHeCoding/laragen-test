<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar330993769;

use App\Models\TestCar330993769;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar330993769 $testCar330993769;

    public function render()
    {
        $items = TestCar330993769::paginate($this->perPage);

        return view('livewire.generated.test-car330993769.index', compact('items'));
    }

            public function delete(TestCar330993769 $testCar330993769): void
        {
                                                if ($testCar330993769->testCar2297571773s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar330993769->delete();
        }
    }
