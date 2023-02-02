<div class="form-group {{$errors->has('testCar1426086887.dr._luciano_pollich_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1426086887.fields.dr._luciano_pollich_id') }}        <input type="text"
               id="3"
               name="testCar1426086887.dr._luciano_pollich_id"
               class="form-control"
               placeholder="dr._luciano_pollich_id"
               wire:model.defer="testCar1426086887.dr._luciano_pollich_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1426086887.dr._luciano_pollich_id')}}        </span>
    </label>
</div>
