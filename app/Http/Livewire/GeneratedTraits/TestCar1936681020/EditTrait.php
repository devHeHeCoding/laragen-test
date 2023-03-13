<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1936681020;

use App\Models\TestCar1936681020;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1936681020 $testCar1936681020;

    
    public function mount(TestCar1936681020 $testCar1936681020)
    {
        $this->testCar1936681020 = $testCar1936681020;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1936681020.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1936681020->save();

        return redirect()->route('laragen.admin.test_car1936681020s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1936681020.test' => [
                                                                                ],
                    ];
    }
}
