<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1906489997;

use App\Models\TestCar1906489997;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1906489997 $testCar1906489997;

                        
    public function mount(TestCar1906489997 $testCar1906489997)
    {
        $this->testCar1906489997 = $testCar1906489997;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1906489997.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1906489997->save();

        return redirect()->route('laragen.admin.test_car1906489997s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1906489997.test' => [
                                                                                                                ],
                    ];
    }
}
