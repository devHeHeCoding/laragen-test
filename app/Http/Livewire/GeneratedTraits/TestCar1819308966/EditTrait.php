<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1819308966;

use App\Models\TestCar1819308966;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1819308966 $testCar1819308966;

                        
    public function mount(TestCar1819308966 $testCar1819308966)
    {
        $this->testCar1819308966 = $testCar1819308966;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1819308966.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1819308966->save();

        return redirect()->route('laragen.admin.test_car1819308966s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1819308966.test' => [
                                                                                                                ],
                    ];
    }
}
