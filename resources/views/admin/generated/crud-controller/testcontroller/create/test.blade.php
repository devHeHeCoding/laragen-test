<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car260875948.fields.test') }}" for="7" :errors="$errors->get('testCar260875948.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car260875948.fields.test')}}" name="testCar260875948.test" id="7" wire:model.defer="testCar260875948.test" />
</x-laragen::input.group>