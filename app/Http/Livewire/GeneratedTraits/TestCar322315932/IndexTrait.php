<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar322315932;

use App\Models\TestCar322315932;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar322315932 $testCar322315932;

    public function render()
    {
        $items = TestCar322315932::paginate($this->perPage);

        return view('livewire.test-car322315932.index', compact('items'));
    }

        public function delete(TestCar322315932 $testCar322315932): void
    {
                                    abort_if(
                    $testCar322315932->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar322315932->delete();
    }
    }
