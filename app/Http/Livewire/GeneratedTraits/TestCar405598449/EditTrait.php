<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar405598449;

use App\Models\TestCar405598449;
                use App\Models\TestCar21621305595;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar405598449 $testCar405598449;

                                            
    public function mount(TestCar405598449 $testCar405598449)
    {
        $this->testCar405598449 = $testCar405598449;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar405598449->save();

        return redirect()->route('laragen.admin.test_car405598449s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar405598449.test' => [
                                                                                                                ],
                                                'testCar405598449.shanel_abshire_i_id' => [
                                                                                                                ],
                    ];
    }
}
