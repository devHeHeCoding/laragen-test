<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar90856639;

use App\Models\TestCar90856639;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar90856639 $testCar90856639;

    public function render()
    {
        $items = TestCar90856639::paginate($this->perPage);

        return view('livewire.test-car90856639.index', compact('items'));
    }

            public function delete(TestCar90856639 $testCar90856639): void
        {
                                                if ($testCar90856639->testCar22039053376s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar90856639->delete();
        }
    }
