<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1778677751;

use App\Models\TestCar1778677751;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1778677751 $testCar1778677751;

    
    public function mount(TestCar1778677751 $testCar1778677751)
    {
        $this->testCar1778677751 = $testCar1778677751;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1778677751.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1778677751->save();

        return redirect()->route('laragen.admin.test_car1778677751s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1778677751.test' => [
                                                                                ],
                    ];
    }
}
