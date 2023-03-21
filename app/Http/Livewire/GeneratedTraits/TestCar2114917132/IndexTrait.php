<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2114917132;

use App\Models\TestCar2114917132;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2114917132 $testCar2114917132;

    public function render()
    {
        $items = TestCar2114917132::paginate($this->perPage);

        return view('livewire.generated.test-car2114917132.index', compact('items'));
    }

            public function delete(TestCar2114917132 $testCar2114917132): void
        {
                                                if ($testCar2114917132->testCar21522056515s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2114917132->delete();
        }
    }
