<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car612343464.fields.test') }}" for="7" :errors="$errors->get('testCar612343464.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car612343464.fields.test')}}" name="testCar612343464.test" id="7" wire:model.defer="testCar612343464.test" />
</x-laragen::input.group>