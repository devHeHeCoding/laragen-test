<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar540468406;

use App\Models\TestCar540468406;
                use App\Models\TestCar21138849090;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar540468406 $testCar540468406;

                                            
    public function mount(TestCar540468406 $testCar540468406)
    {
        $this->testCar540468406 = $testCar540468406;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar540468406->save();

        return redirect()->route('laragen.admin.test_car540468406s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar540468406.test' => [
                                                                                                                ],
                                                'testCar540468406.lonzo_o&#039;_conner_id' => [
                                                                                                                ],
                    ];
    }
}
