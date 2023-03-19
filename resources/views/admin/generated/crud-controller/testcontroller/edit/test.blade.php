<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car457912317.fields.test') }}" for="7" :errors="$errors->get('testCar457912317.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car457912317.fields.test')}}" name="testCar457912317.test" id="7" wire:model.defer="testCar457912317.test" />
</x-laragen::input.group>