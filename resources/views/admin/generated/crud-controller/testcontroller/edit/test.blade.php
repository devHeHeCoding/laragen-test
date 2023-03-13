<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car932819473.fields.test') }}" for="7" :errors="$errors->get('testCar932819473.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car932819473.fields.test')}}" name="testCar932819473.test" id="7" wire:model.defer="testCar932819473.test" />
</x-laragen::input.group>