<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar925481405;

use App\Models\TestCar925481405;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar925481405 $testCar925481405;

                        
    public function mount(TestCar925481405 $testCar925481405)
    {
        $this->testCar925481405 = $testCar925481405;
                                }

    public function render()
    {
        return view('livewire.generated.test-car925481405.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar925481405->save();

        return redirect()->route('laragen.admin.test_car925481405s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar925481405.test' => [
                                                                                ],
                    ];
    }
}
