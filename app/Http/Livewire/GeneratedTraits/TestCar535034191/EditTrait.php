<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar535034191;

use App\Models\TestCar535034191;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar535034191 $testCar535034191;

                        
    public function mount(TestCar535034191 $testCar535034191)
    {
        $this->testCar535034191 = $testCar535034191;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar535034191->save();

        return redirect()->route('laragen.admin.test_car535034191s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar535034191.test' => [
                                                                                                                ],
                    ];
    }
}
