<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar475663033;

use App\Models\TestCar475663033;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar475663033 $testCar475663033;

                        
    public function mount(TestCar475663033 $testCar475663033)
    {
        $this->testCar475663033 = $testCar475663033;
                                }

    public function render()
    {
        return view('livewire.generated.test-car475663033.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar475663033->save();

        return redirect()->route('laragen.admin.test_car475663033s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar475663033.test' => [
                                                                                                                ],
                    ];
    }
}
