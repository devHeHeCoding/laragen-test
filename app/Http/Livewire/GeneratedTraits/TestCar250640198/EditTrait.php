<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar250640198;

use App\Models\TestCar250640198;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar250640198 $testCar250640198;

    
    public function mount(TestCar250640198 $testCar250640198)
    {
        $this->testCar250640198 = $testCar250640198;
            }

    public function render()
    {
        return view('livewire.generated.test-car250640198.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar250640198->save();

        return redirect()->route('laragen.admin.test_car250640198s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar250640198.test' => [
                                                                                ],
                    ];
    }
}
