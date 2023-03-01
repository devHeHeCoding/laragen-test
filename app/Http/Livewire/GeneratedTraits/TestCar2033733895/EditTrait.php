<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2033733895;

use App\Models\TestCar2033733895;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2033733895 $testCar2033733895;

                        
    public function mount(TestCar2033733895 $testCar2033733895)
    {
        $this->testCar2033733895 = $testCar2033733895;
                                }

    public function render()
    {
        return view('livewire.generated.test-car2033733895.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2033733895->save();

        return redirect()->route('laragen.admin.test_car2033733895s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2033733895.test' => [
                                                                                                                ],
                    ];
    }
}
