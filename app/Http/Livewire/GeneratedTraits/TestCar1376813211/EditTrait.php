<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1376813211;

use App\Models\TestCar1376813211;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1376813211 $testCar1376813211;

                        
    public function mount(TestCar1376813211 $testCar1376813211)
    {
        $this->testCar1376813211 = $testCar1376813211;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1376813211.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1376813211->save();

        return redirect()->route('laragen.admin.test_car1376813211s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1376813211.test' => [
                                                                                                                ],
                    ];
    }
}
