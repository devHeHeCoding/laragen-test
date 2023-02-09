<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar572401614;

use App\Models\TestCar572401614;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar572401614 $testCar572401614;

                        
    public function mount(TestCar572401614 $testCar572401614)
    {
        $this->testCar572401614 = $testCar572401614;
                                }

    public function render()
    {
        return view('livewire.generated.test-car572401614.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar572401614->save();

        return redirect()->route('laragen.admin.test_car572401614s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar572401614.test' => [
                                                                                                                ],
                    ];
    }
}
