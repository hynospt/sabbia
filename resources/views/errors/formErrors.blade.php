@if (session()->has('flash_notification.message'))
  <div class="alert alert-{{ session('flash_notification.level') }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

      {!! session('flash_notification.message') !!}
      <ul>
        @foreach($errors->messages() as $key=>$value)
          <li>{!! sprintf("%s - %s", $key, $value[0]) !!}</li>
        @endforeach
      </ul>
  </div>
@endif