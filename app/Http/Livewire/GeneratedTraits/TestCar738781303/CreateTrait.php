<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738781303;

use App\Models\TestCar738781303;
            use App\Models\TestCar2956586136;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar738781303 $testCar738781303;

                                            
    public function mount(TestCar738781303 $testCar738781303)
    {
        $this->testCar738781303 = $testCar738781303;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car738781303.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar738781303->save();

        return redirect()->route('laragen.admin.test_car738781303s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar738781303.test' => [
                                                                                ],
                                                                    'testCar738781303.alford_zboncak_id' => [
                                                                                ],
                    ];
    }
}
