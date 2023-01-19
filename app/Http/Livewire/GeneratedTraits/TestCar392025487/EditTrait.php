<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar392025487;

use App\Models\TestCar392025487;
                use App\Models\TestCar21912816289;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar392025487 $testCar392025487;

                                            
    public function mount(TestCar392025487 $testCar392025487)
    {
        $this->testCar392025487 = $testCar392025487;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar392025487->save();

        return redirect()->route('laragen.admin.test_car392025487s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar392025487.test' => [
                                                                                                                ],
                                                'testCar392025487.prof._dayton_lang_id' => [
                                                                                                                ],
                    ];
    }
}
