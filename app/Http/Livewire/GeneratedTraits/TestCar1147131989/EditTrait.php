<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1147131989;

use App\Models\TestCar1147131989;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1147131989 $testCar1147131989;

                        
    public function mount(TestCar1147131989 $testCar1147131989)
    {
        $this->testCar1147131989 = $testCar1147131989;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1147131989.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1147131989->save();

        return redirect()->route('laragen.admin.test_car1147131989s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1147131989.test' => [
                                                                                                                ],
                    ];
    }
}
