<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car802765708.fields.test') }}" for="7" :errors="$errors->get('testCar802765708.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car802765708.fields.test')}}" name="testCar802765708.test" id="7" wire:model.defer="testCar802765708.test" />
</x-laragen::input.group>