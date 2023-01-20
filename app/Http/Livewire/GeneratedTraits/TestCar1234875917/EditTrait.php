<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1234875917;

use App\Models\TestCar1234875917;
                use App\Models\TestCar2832278089;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1234875917 $testCar1234875917;

                                            
    public function mount(TestCar1234875917 $testCar1234875917)
    {
        $this->testCar1234875917 = $testCar1234875917;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1234875917->save();

        return redirect()->route('laragen.admin.test_car1234875917s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1234875917.test' => [
                                                                                                                ],
                                                'testCar1234875917.miss_christina_farrell_i_v_id' => [
                                                                                                                ],
                    ];
    }
}
