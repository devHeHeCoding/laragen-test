<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1331586653;

use App\Models\TestCar1331586653;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1331586653 $testCar1331586653;

                        
    public function mount(TestCar1331586653 $testCar1331586653)
    {
        $this->testCar1331586653 = $testCar1331586653;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1331586653.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1331586653->save();

        return redirect()->route('laragen.admin.test_car1331586653s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1331586653.test' => [
                                                                                                                ],
                    ];
    }
}
