<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar496868380;

use App\Models\TestCar496868380;
                use App\Models\TestCar21221427718;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar496868380 $testCar496868380;

                                            
    public function mount(TestCar496868380 $testCar496868380)
    {
        $this->testCar496868380 = $testCar496868380;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar496868380->save();

        return redirect()->route('laragen.admin.test_car496868380s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar496868380.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar496868380.aliyah_kunde_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
