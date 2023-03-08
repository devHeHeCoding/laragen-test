<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar791739313;

use App\Models\TestCar791739313;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar791739313 $testCar791739313;

                        
    public function mount(TestCar791739313 $testCar791739313)
    {
        $this->testCar791739313 = $testCar791739313;
                                }

    public function render()
    {
        return view('livewire.generated.test-car791739313.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar791739313->save();

        return redirect()->route('laragen.admin.test_car791739313s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar791739313.test' => [
                                                                                ],
                    ];
    }
}
