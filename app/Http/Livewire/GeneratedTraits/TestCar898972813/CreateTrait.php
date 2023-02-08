<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar898972813;

use App\Models\TestCar898972813;
                    use App\Models\TestCar21637820003;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar898972813 $testCar898972813;

                                            
    public function mount(TestCar898972813 $testCar898972813)
    {
        $this->testCar898972813 = $testCar898972813;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car898972813.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar898972813->save();

        return redirect()->route('laragen.admin.test_car898972813s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar898972813.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar898972813.antonetta_king_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
