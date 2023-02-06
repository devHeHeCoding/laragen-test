<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1189261820;

use App\Models\TestCar1189261820;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1189261820 $testCar1189261820;

                        
    public function mount(TestCar1189261820 $testCar1189261820)
    {
        $this->testCar1189261820 = $testCar1189261820;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1189261820->save();

        return redirect()->route('laragen.admin.test_car1189261820s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1189261820.test' => [
                                                                                                                ],
                    ];
    }
}
