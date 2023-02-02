<div class="form-group {{$errors->has('testCar1895561726.dallas_smith_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1895561726.fields.dallas_smith_id') }}        <input type="text"
               id="3"
               name="testCar1895561726.dallas_smith_id"
               class="form-control"
               placeholder="dallas_smith_id"
               wire:model.defer="testCar1895561726.dallas_smith_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1895561726.dallas_smith_id')}}        </span>
    </label>
</div>
