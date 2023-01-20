<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar289843917;

use App\Models\TestCar289843917;
                use App\Models\TestCar2578749838;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar289843917 $testCar289843917;

                                            
    public function mount(TestCar289843917 $testCar289843917)
    {
        $this->testCar289843917 = $testCar289843917;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar289843917->save();

        return redirect()->route('laragen.admin.test_car289843917s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar289843917.test' => [
                                                                                                                ],
                                                'testCar289843917.prof._cesar_runolfsson_id' => [
                                                                                                                ],
                    ];
    }
}
