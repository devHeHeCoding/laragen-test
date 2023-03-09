<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar260875948;

use App\Models\TestCar260875948;
            use App\Models\TestCar2836000106;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar260875948 $testCar260875948;

                                            
    public function mount(TestCar260875948 $testCar260875948)
    {
        $this->testCar260875948 = $testCar260875948;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car260875948.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar260875948->save();

        return redirect()->route('laragen.admin.test_car260875948s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar260875948.test' => [
                                                                                ],
                                                                    'testCar260875948.murphy_bauch_id' => [
                                                                                ],
                    ];
    }
}
