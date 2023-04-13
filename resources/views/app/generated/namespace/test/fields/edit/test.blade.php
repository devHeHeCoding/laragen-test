<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car808231488.fields.test') }}" for="7" :errors="$errors->get('testCar808231488.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car808231488.fields.test')}}" name="testCar808231488.test" id="7" wire:model.defer="testCar808231488.test" />
</x-laragen::input.group>