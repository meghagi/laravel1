<div class="form-group">
      <label for="">{{$label}}</label>
      <input type="{{$type}}" class="form-control" id="fname"  name="{{$name}}">
      <span class="text-danger">
        @error('Firstname')
            {{$message}}

        @enderror
      </span>
  </div>
