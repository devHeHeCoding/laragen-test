<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2084720087;

use App\Models\TestCar2084720087;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2084720087 $testCar2084720087;

    public function render()
    {
        $items = TestCar2084720087::paginate($this->perPage);

        return view('livewire.generated.test-car2084720087.index', compact('items'));
    }

            public function delete(TestCar2084720087 $testCar2084720087): void
        {
                                                if ($testCar2084720087->testCar2422308149s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2084720087->delete();
        }
    }
