<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar417718973;

use App\Models\TestCar417718973;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar417718973 $testCar417718973;

                        
    public function mount(TestCar417718973 $testCar417718973)
    {
        $this->testCar417718973 = $testCar417718973;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar417718973->save();

        return redirect()->route('laragen.admin.test_car417718973s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar417718973.test' => [
                                                                                                                ],
                    ];
    }
}
