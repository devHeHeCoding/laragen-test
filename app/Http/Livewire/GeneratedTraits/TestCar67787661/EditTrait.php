<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar67787661;

use App\Models\TestCar67787661;
                use App\Models\TestCar2734680696;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar67787661 $testCar67787661;

                                            
    public function mount(TestCar67787661 $testCar67787661)
    {
        $this->testCar67787661 = $testCar67787661;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar67787661->save();

        return redirect()->route('laragen.admin.test_car67787661s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar67787661.test' => [
                                                                                                                ],
                                                'testCar67787661.aiden_stracke_id' => [
                                                                                                                ],
                    ];
    }
}
