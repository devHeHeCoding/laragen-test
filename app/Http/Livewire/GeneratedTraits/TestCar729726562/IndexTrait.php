<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar729726562;

use App\Models\TestCar729726562;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar729726562 $testCar729726562;

    public function render()
    {
        $items = TestCar729726562::paginate($this->perPage);

        return view('livewire.generated.test-car729726562.index', compact('items'));
    }

            public function delete(TestCar729726562 $testCar729726562): void
        {
                                                if ($testCar729726562->testCar21535039407s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar729726562->delete();
        }
    }
