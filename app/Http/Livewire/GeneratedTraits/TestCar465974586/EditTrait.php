<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar465974586;

use App\Models\TestCar465974586;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar465974586 $testCar465974586;

                        
    public function mount(TestCar465974586 $testCar465974586)
    {
        $this->testCar465974586 = $testCar465974586;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar465974586->save();

        return redirect()->route('laragen.admin.test_car465974586s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar465974586.test' => [
                                                                                                                ],
                    ];
    }
}
