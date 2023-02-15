<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar251616098;

use App\Models\TestCar251616098;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar251616098 $testCar251616098;

    public function render()
    {
        $items = TestCar251616098::paginate($this->perPage);

        return view('livewire.generated.test-car251616098.index', compact('items'));
    }

            public function delete(TestCar251616098 $testCar251616098): void
        {
                                                if ($testCar251616098->testCar2940058236s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar251616098->delete();
        }
    }
