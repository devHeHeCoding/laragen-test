<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar584991464;

use App\Models\TestCar584991464;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar584991464 $testCar584991464;

                        
    public function mount(TestCar584991464 $testCar584991464)
    {
        $this->testCar584991464 = $testCar584991464;
                                }

    public function render()
    {
        return view('livewire.generated.test-car584991464.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar584991464->save();

        return redirect()->route('laragen.admin.test_car584991464s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar584991464.test' => [
                                                                                                                ],
                    ];
    }
}
