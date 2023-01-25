<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar96023851;

use App\Models\TestCar96023851;
                use App\Models\TestCar21010105638;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar96023851 $testCar96023851;

                                            
    public function mount(TestCar96023851 $testCar96023851)
    {
        $this->testCar96023851 = $testCar96023851;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar96023851->save();

        return redirect()->route('laragen.admin.test_car96023851s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar96023851.test' => [
                                                                                                                ],
                                                'testCar96023851.sherwood_heller_id' => [
                                                                                                                ],
                    ];
    }
}
