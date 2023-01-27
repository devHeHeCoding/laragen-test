<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar662682466;

use App\Models\TestCar662682466;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar662682466 $testCar662682466;

                        
    public function mount(TestCar662682466 $testCar662682466)
    {
        $this->testCar662682466 = $testCar662682466;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar662682466->save();

        return redirect()->route('laragen.admin.test_car662682466s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar662682466.test' => [
                                                                                                                ],
                    ];
    }
}
