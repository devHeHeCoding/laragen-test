<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car330993769.fields.test') }}" for="7" :errors="$errors->get('testCar330993769.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car330993769.fields.test')}}" name="testCar330993769.test" id="7" wire:model.defer="testCar330993769.test" />
</x-laragen::input.group>