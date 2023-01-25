<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar241019467;

use App\Models\TestCar241019467;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar241019467 $testCar241019467;

    public function render()
    {
        $items = TestCar241019467::paginate($this->perPage);

        return view('livewire.test-car241019467.index', compact('items'));
    }

            public function delete(TestCar241019467 $testCar241019467): void
        {
                                                if ($testCar241019467->testCar21576251869s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar241019467->delete();
        }
    }
