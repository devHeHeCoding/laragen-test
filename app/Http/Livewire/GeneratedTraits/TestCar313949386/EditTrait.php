<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar313949386;

use App\Models\TestCar313949386;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar313949386 $testCar313949386;

                        
    public function mount(TestCar313949386 $testCar313949386)
    {
        $this->testCar313949386 = $testCar313949386;
                                }

    public function render()
    {
        return view('livewire.generated.test-car313949386.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar313949386->save();

        return redirect()->route('laragen.admin.test_car313949386s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar313949386.test' => [
                                                                                                                ],
                    ];
    }
}
