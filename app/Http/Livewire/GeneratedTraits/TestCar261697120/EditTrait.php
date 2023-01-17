<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar261697120;

use App\Models\TestCar261697120;
                use App\Models\TestCar21728263332;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21728263332s;
            
    public TestCar261697120 $testCar261697120;

    public function mount(TestCar261697120 $testCar261697120)
    {
        $this->testCar261697120 = $testCar261697120;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar261697120->save();

        return redirect()->route('laragentestCar261697120s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar261697120.test' => [
                                                                                                                ],
                                                'testCar261697120.crystal_wisozk_id' => [
                                                                                                                ],
                    ];
    }
}
