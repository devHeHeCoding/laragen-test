<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar907212109;

use App\Models\TestCar907212109;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar907212109 $testCar907212109;

                        
    public function mount(TestCar907212109 $testCar907212109)
    {
        $this->testCar907212109 = $testCar907212109;
                                }

    public function render()
    {
        return view('livewire.generated.test-car907212109.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar907212109->save();

        return redirect()->route('laragen.admin.test_car907212109s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar907212109.test' => [
                                                                                                                ],
                    ];
    }
}
