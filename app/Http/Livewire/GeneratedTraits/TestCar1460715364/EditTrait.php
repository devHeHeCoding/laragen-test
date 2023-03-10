<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1460715364;

use App\Models\TestCar1460715364;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1460715364 $testCar1460715364;

    
    public function mount(TestCar1460715364 $testCar1460715364)
    {
        $this->testCar1460715364 = $testCar1460715364;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1460715364.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1460715364->save();

        return redirect()->route('laragen.admin.test_car1460715364s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1460715364.test' => [
                                                                                ],
                    ];
    }
}
