<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1186187951;

use App\Models\TestCar1186187951;
use App\Models\TestCar21523637180;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1186187951 $testCar1186187951;

                        
    public function mount(TestCar1186187951 $testCar1186187951)
    {
        $this->testCar1186187951 = $testCar1186187951;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1186187951.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1186187951->save();

        return redirect()->route('laragen.admin.test_car1186187951s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1186187951.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1186187951.mr._rickie_buckridge_d_d_s_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
