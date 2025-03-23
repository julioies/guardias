<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="profesor_id" class="form-label">{{ __('Profesor Id') }}</label>
            <input type="text" name="profesor_id" class="form-control @error('profesor_id') is-invalid @enderror" value="{{ old('profesor_id', $guardia?->profesor_id) }}" id="profesor_id" placeholder="Profesor Id">
            {!! $errors->first('profesor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="horario_id" class="form-label">{{ __('Horario Id') }}</label>
            <input type="text" name="horario_id" class="form-control @error('horario_id') is-invalid @enderror" value="{{ old('horario_id', $guardia?->horario_id) }}" id="horario_id" placeholder="Horario Id">
            {!! $errors->first('horario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="zona_id" class="form-label">{{ __('Zona Id') }}</label>
            <input type="text" name="zona_id" class="form-control @error('zona_id') is-invalid @enderror" value="{{ old('zona_id', $guardia?->zona_id) }}" id="zona_id" placeholder="Zona Id">
            {!! $errors->first('zona_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mes" class="form-label">{{ __('Mes') }}</label>
            <input type="text" name="mes" class="form-control @error('mes') is-invalid @enderror" value="{{ old('mes', $guardia?->mes) }}" id="mes" placeholder="Mes">
            {!! $errors->first('mes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>