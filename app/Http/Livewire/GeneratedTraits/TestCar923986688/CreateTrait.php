<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar923986688;

use App\Models\TestCar923986688;
use App\Models\TestCar2985164798;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar923986688 $testCar923986688;

                        
    public function mount(TestCar923986688 $testCar923986688)
    {
        $this->testCar923986688 = $testCar923986688;
                                }

    public function render()
    {
        return view('livewire.generated.test-car923986688.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar923986688->save();

        return redirect()->route('laragen.admin.test_car923986688s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar923986688.test' => [
                                                                                ],
                                                                    'testCar923986688.mrs._meta_bins_id' => [
                                                                                ],
                    ];
    }
}
