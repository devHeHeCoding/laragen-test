<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1302454223;

use App\Models\TestCar1302454223;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1302454223 $testCar1302454223;

                        
    public function mount(TestCar1302454223 $testCar1302454223)
    {
        $this->testCar1302454223 = $testCar1302454223;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1302454223.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1302454223->save();

        return redirect()->route('laragen.admin.test_car1302454223s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1302454223.test' => [
                                                                                                                ],
                    ];
    }
}
