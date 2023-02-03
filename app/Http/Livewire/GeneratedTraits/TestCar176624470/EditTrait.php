<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar176624470;

use App\Models\TestCar176624470;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar176624470 $testCar176624470;

                        
    public function mount(TestCar176624470 $testCar176624470)
    {
        $this->testCar176624470 = $testCar176624470;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar176624470->save();

        return redirect()->route('laragen.admin.test_car176624470s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar176624470.test' => [
                                                                                                                ],
                    ];
    }
}
