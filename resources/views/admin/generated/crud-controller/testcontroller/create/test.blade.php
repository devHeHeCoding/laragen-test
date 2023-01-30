<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car417718973.fields.test') }}        <input type="text"
               id="7"
               name="testCar417718973.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar417718973.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
