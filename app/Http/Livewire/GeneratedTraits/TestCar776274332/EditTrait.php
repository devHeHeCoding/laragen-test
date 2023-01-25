<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar776274332;

use App\Models\TestCar776274332;
                use App\Models\TestCar21653590171;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar776274332 $testCar776274332;

                                            
    public function mount(TestCar776274332 $testCar776274332)
    {
        $this->testCar776274332 = $testCar776274332;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar776274332->save();

        return redirect()->route('laragen.admin.test_car776274332s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar776274332.test' => [
                                                                                                                ],
                                                'testCar776274332.rhett_hills_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
