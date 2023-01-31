<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar561906651;

use App\Models\TestCar561906651;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar561906651 $testCar561906651;

                        
    public function mount(TestCar561906651 $testCar561906651)
    {
        $this->testCar561906651 = $testCar561906651;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar561906651->save();

        return redirect()->route('laragen.admin.test_car561906651s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar561906651.test' => [
                                                                                                                ],
                    ];
    }
}
