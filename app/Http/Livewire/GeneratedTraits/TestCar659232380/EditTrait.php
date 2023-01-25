<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar659232380;

use App\Models\TestCar659232380;
                use App\Models\TestCar21573850148;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar659232380 $testCar659232380;

                                            
    public function mount(TestCar659232380 $testCar659232380)
    {
        $this->testCar659232380 = $testCar659232380;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar659232380->save();

        return redirect()->route('laragen.admin.test_car659232380s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar659232380.test' => [
                                                                                                                ],
                                                'testCar659232380.casper_schroeder_id' => [
                                                                                                                ],
                    ];
    }
}
