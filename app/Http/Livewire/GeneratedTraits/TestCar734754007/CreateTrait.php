<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar734754007;

use App\Models\TestCar734754007;
                    use App\Models\TestCar21184078765;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar734754007 $testCar734754007;

                                            
    public function mount(TestCar734754007 $testCar734754007)
    {
        $this->testCar734754007 = $testCar734754007;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar734754007->save();

        return redirect()->route('laragen.admin.test_car734754007s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar734754007.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar734754007.dr._hazel_fritsch_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
