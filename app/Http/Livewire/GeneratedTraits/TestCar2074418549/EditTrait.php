<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2074418549;

use App\Models\TestCar2074418549;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2074418549 $testCar2074418549;

                        
    public function mount(TestCar2074418549 $testCar2074418549)
    {
        $this->testCar2074418549 = $testCar2074418549;
                                }

    public function render()
    {
        return view('livewire.generated.test-car2074418549.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2074418549->save();

        return redirect()->route('laragen.admin.test_car2074418549s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2074418549.test' => [
                                                                                                                ],
                    ];
    }
}
