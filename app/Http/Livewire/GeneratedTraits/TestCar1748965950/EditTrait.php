<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1748965950;

use App\Models\TestCar1748965950;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1748965950 $testCar1748965950;

                        
    public function mount(TestCar1748965950 $testCar1748965950)
    {
        $this->testCar1748965950 = $testCar1748965950;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1748965950->save();

        return redirect()->route('laragen.admin.test_car1748965950s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1748965950.test' => [
                                                                                                                ],
                    ];
    }
}
