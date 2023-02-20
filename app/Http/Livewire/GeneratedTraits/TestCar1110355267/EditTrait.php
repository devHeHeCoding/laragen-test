<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1110355267;

use App\Models\TestCar1110355267;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1110355267 $testCar1110355267;

                        
    public function mount(TestCar1110355267 $testCar1110355267)
    {
        $this->testCar1110355267 = $testCar1110355267;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1110355267.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1110355267->save();

        return redirect()->route('laragen.admin.test_car1110355267s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1110355267.test' => [
                                                                                                                ],
                    ];
    }
}
