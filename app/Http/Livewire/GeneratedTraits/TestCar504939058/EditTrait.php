<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar504939058;

use App\Models\TestCar504939058;
                use App\Models\TestCar2739897333;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar504939058 $testCar504939058;

    public function mount(TestCar504939058 $testCar504939058)
    {
        $this->testCar504939058 = $testCar504939058;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar504939058->save();

        return redirect()->route('admin.testCar504939058.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar504939058.test' => [
                                                                                                                ],
                                                'testCar504939058.forest_bogan_id' => [
                                                                                                                ],
                    ];
    }
}
