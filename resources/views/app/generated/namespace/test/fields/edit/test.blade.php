<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car990725055.fields.test') }}" for="7" :errors="$errors->get('testCar990725055.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car990725055.fields.test')}}" name="testCar990725055.test" id="7" wire:model.defer="testCar990725055.test" />
</x-laragen::input.group>