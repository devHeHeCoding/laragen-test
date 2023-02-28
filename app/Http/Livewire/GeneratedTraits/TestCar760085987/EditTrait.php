<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar760085987;

use App\Models\TestCar760085987;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar760085987 $testCar760085987;

                        
    public function mount(TestCar760085987 $testCar760085987)
    {
        $this->testCar760085987 = $testCar760085987;
                                }

    public function render()
    {
        return view('livewire.generated.test-car760085987.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar760085987->save();

        return redirect()->route('laragen.admin.test_car760085987s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar760085987.test' => [
                                                                                                                ],
                    ];
    }
}
