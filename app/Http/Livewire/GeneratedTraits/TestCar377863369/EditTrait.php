<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar377863369;

use App\Models\TestCar377863369;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar377863369 $testCar377863369;

                        
    public function mount(TestCar377863369 $testCar377863369)
    {
        $this->testCar377863369 = $testCar377863369;
                                }

    public function render()
    {
        return view('livewire.generated.test-car377863369.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar377863369->save();

        return redirect()->route('laragen.admin.test_car377863369s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar377863369.test' => [
                                                                                                                ],
                    ];
    }
}
