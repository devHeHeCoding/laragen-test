<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar760085987;

use App\Models\TestCar760085987;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar760085987 $testCar760085987;

    public function render()
    {
        $items = TestCar760085987::paginate($this->perPage);

        return view('livewire.generated.test-car760085987.index', compact('items'));
    }

            public function delete(TestCar760085987 $testCar760085987): void
        {
                                                if ($testCar760085987->testCar21524459065s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar760085987->delete();
        }
    }
