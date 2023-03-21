<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2093887144;

use App\Models\TestCar2093887144;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2093887144 $testCar2093887144;

    
    public function mount(TestCar2093887144 $testCar2093887144)
    {
        $this->testCar2093887144 = $testCar2093887144;
            }

    public function render()
    {
        return view('livewire.generated.test-car2093887144.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2093887144->save();

        return redirect()->route('laragen.admin.test_car2093887144s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2093887144.test' => [
                                                                                ],
                    ];
    }
}
