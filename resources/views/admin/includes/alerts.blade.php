@if ($errors->any())
    <div class="alert alert-danger col-md-12">
        <ul style="margin-bottom: 0px;">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <p class="alert alert-success col-md-12">{!! session('success') !!}</p>
@elseif(session('error'))
    <p class="alert alert-danger col-md-12">{!! session('error') !!}</p>
@endif
