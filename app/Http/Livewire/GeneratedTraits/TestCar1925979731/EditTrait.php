<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1925979731;

use App\Models\TestCar1925979731;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1925979731 $testCar1925979731;

                        
    public function mount(TestCar1925979731 $testCar1925979731)
    {
        $this->testCar1925979731 = $testCar1925979731;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1925979731->save();

        return redirect()->route('laragen.admin.test_car1925979731s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1925979731.test' => [
                                                                                                                ],
                    ];
    }
}
