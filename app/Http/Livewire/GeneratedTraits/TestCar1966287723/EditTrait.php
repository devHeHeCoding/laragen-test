<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1966287723;

use App\Models\TestCar1966287723;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1966287723 $testCar1966287723;

                        
    public function mount(TestCar1966287723 $testCar1966287723)
    {
        $this->testCar1966287723 = $testCar1966287723;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1966287723.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1966287723->save();

        return redirect()->route('laragen.admin.test_car1966287723s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1966287723.test' => [
                                                                                                                ],
                    ];
    }
}
