<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1509961157;

use App\Models\TestCar1509961157;
                use App\Models\TestCar21984856770;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1509961157 $testCar1509961157;

                                            
    public function mount(TestCar1509961157 $testCar1509961157)
    {
        $this->testCar1509961157 = $testCar1509961157;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1509961157->save();

        return redirect()->route('laragen.admin.test_car1509961157s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1509961157.test' => [
                                                                                                                ],
                                                'testCar1509961157.helmer_weimann_id' => [
                                                                                                                ],
                    ];
    }
}
