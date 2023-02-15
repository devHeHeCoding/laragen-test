<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car475663033.fields.test') }}" for="7" :errors="$errors->get('testCar475663033.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar475663033.test" id="7" wire:model.defer="testCar475663033.test" />
</x-laragen::input.group>