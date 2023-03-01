<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1164626058;

use App\Models\TestCar1164626058;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1164626058 $testCar1164626058;

                        
    public function mount(TestCar1164626058 $testCar1164626058)
    {
        $this->testCar1164626058 = $testCar1164626058;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1164626058.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1164626058->save();

        return redirect()->route('laragen.admin.test_car1164626058s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1164626058.test' => [
                                                                                                                ],
                    ];
    }
}
