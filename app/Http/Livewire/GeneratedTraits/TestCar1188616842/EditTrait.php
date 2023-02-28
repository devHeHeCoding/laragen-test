<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1188616842;

use App\Models\TestCar1188616842;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1188616842 $testCar1188616842;

                        
    public function mount(TestCar1188616842 $testCar1188616842)
    {
        $this->testCar1188616842 = $testCar1188616842;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1188616842.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1188616842->save();

        return redirect()->route('laragen.admin.test_car1188616842s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1188616842.test' => [
                                                                                                                ],
                    ];
    }
}
