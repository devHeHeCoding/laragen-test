<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car521786102.fields.test') }}" for="7" :errors="$errors->get('testCar521786102.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car521786102.fields.test')}}" name="testCar521786102.test" id="7" wire:model.defer="testCar521786102.test" />
</x-laragen::input.group>