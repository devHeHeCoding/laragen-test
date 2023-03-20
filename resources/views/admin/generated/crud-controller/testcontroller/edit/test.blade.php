<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car17145504.fields.test') }}" for="7" :errors="$errors->get('testCar17145504.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car17145504.fields.test')}}" name="testCar17145504.test" id="7" wire:model.defer="testCar17145504.test" />
</x-laragen::input.group>