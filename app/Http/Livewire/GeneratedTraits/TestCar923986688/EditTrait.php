<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar923986688;

use App\Models\TestCar923986688;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar923986688 $testCar923986688;

    
    public function mount(TestCar923986688 $testCar923986688)
    {
        $this->testCar923986688 = $testCar923986688;
            }

    public function render()
    {
        return view('livewire.generated.test-car923986688.edit');
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
                    ];
    }
}
