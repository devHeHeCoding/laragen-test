<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar561906651;

use App\Models\TestCar561906651;
                use App\Models\TestCar21104752396;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar561906651 $testCar561906651;

                                            
    public function mount(TestCar561906651 $testCar561906651)
    {
        $this->testCar561906651 = $testCar561906651;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar561906651->save();

        return redirect()->route('laragen.admin.test_car561906651s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar561906651.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar561906651.dr._deshawn_stokes_i_v_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
