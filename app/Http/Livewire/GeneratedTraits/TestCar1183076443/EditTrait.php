<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1183076443;

use App\Models\TestCar1183076443;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1183076443 $testCar1183076443;

    
    public function mount(TestCar1183076443 $testCar1183076443)
    {
        $this->testCar1183076443 = $testCar1183076443;
            }

    public function render()
    {
        return view('livewire.generated.test-car1183076443.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1183076443->save();

        return redirect()->route('laragen.admin.test_car1183076443s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1183076443.test' => [
                                                                                ],
                    ];
    }
}
