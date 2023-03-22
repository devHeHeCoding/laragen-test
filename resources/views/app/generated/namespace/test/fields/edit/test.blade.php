<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car23802103.fields.test') }}" for="7" :errors="$errors->get('testCar23802103.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car23802103.fields.test')}}" name="testCar23802103.test" id="7" wire:model.defer="testCar23802103.test" />
</x-laragen::input.group>