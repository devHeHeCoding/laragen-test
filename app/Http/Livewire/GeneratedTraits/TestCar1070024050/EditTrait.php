<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1070024050;

use App\Models\TestCar1070024050;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1070024050 $testCar1070024050;

                        
    public function mount(TestCar1070024050 $testCar1070024050)
    {
        $this->testCar1070024050 = $testCar1070024050;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1070024050.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1070024050->save();

        return redirect()->route('laragen.admin.test_car1070024050s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1070024050.test' => [
                                                                                                                ],
                    ];
    }
}
