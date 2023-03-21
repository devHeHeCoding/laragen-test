<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car48801496.fields.test') }}" for="7" :errors="$errors->get('testCar48801496.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car48801496.fields.test')}}" name="testCar48801496.test" id="7" wire:model.defer="testCar48801496.test" />
</x-laragen::input.group>