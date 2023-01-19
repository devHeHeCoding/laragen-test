<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar432441379;

use App\Models\TestCar432441379;
                use App\Models\TestCar2701941153;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar432441379 $testCar432441379;

                                            
    public function mount(TestCar432441379 $testCar432441379)
    {
        $this->testCar432441379 = $testCar432441379;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar432441379->save();

        return redirect()->route('laragen.admin.test_car432441379s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar432441379.test' => [
                                                                                                                ],
                                                'testCar432441379.bennie_schultz_jr._id' => [
                                                                                                                ],
                    ];
    }
}
