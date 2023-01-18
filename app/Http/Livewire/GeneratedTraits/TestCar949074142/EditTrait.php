<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar949074142;

use App\Models\TestCar949074142;
                use App\Models\TestCar2388929212;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2388929212s;
            
    public TestCar949074142 $testCar949074142;

    public function mount(TestCar949074142 $testCar949074142)
    {
        $this->testCar949074142 = $testCar949074142;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar949074142->save();

        return redirect()->route('laragentest_car949074142s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar949074142.test' => [
                                                                                                                ],
                                                'testCar949074142.lillie_kihn_id' => [
                                                                                                                ],
                    ];
    }
}
