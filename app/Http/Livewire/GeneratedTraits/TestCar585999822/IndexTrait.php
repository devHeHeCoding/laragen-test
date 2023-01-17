<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar585999822;

use App\Models\TestCar585999822;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar585999822 $testCar585999822;

    public function render()
    {
        $items = TestCar585999822::paginate($this->perPage);

        return view('livewire.testcar585999822.index', compact('items'));
    }

        public function delete(TestCar585999822 $testCar585999822): void
    {
                                    abort_if(
                    $testCar585999822->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar585999822->delete();
    }
    }
