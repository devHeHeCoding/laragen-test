<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1958785920;

use App\Models\TestCar1958785920;
            use App\Models\TestCar21828901928;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1958785920 $testCar1958785920;

                                            
    public function mount(TestCar1958785920 $testCar1958785920)
    {
        $this->testCar1958785920 = $testCar1958785920;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1958785920.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1958785920->save();

        return redirect()->route('laragen.admin.test_car1958785920s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1958785920.test' => [
                                                                                ],
                                                                    'testCar1958785920.cleveland_grimes_id' => [
                                                                                ],
                    ];
    }
}
