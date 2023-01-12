<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar454794994;

use App\Models\TestCar454794994;
                use App\Models\TestCar21097332170;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar454794994 $testCar454794994;

    public function mount(TestCar454794994 $testCar454794994)
    {
        $this->testCar454794994 = $testCar454794994;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar454794994->save();

        return redirect()->route('admin.testCar454794994.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar454794994.test' => [
                                                                                                                ],
                                                'testCar454794994.adelle_kozey_id' => [
                                                                                                                ],
                    ];
    }
}
