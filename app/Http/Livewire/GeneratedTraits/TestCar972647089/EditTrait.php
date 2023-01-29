<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar972647089;

use App\Models\TestCar972647089;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar972647089 $testCar972647089;

                        
    public function mount(TestCar972647089 $testCar972647089)
    {
        $this->testCar972647089 = $testCar972647089;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar972647089->save();

        return redirect()->route('laragen.admin.test_car972647089s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar972647089.test' => [
                                                                                                                ],
                    ];
    }
}
