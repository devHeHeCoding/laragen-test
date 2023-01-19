<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1865279893;

use App\Models\TestCar1865279893;
                use App\Models\TestCar224190408;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1865279893 $testCar1865279893;

                                            
    public function mount(TestCar1865279893 $testCar1865279893)
    {
        $this->testCar1865279893 = $testCar1865279893;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1865279893->save();

        return redirect()->route('laragen.admin.test_car1865279893s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1865279893.test' => [
                                                                                                                ],
                                                'testCar1865279893.mrs._ima_bogisich_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
