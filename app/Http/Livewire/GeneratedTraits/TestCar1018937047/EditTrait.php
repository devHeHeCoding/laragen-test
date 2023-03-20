<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1018937047;

use App\Models\TestCar1018937047;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1018937047 $testCar1018937047;

    
    public function mount(TestCar1018937047 $testCar1018937047)
    {
        $this->testCar1018937047 = $testCar1018937047;
            }

    public function render()
    {
        return view('livewire.generated.test-car1018937047.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1018937047->save();

        return redirect()->route('laragen.admin.test_car1018937047s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1018937047.test' => [
                                                                                ],
                    ];
    }
}
