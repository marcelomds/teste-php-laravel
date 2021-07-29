@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-default-danger">
        <strong>
            {{ session('error') }}
        </strong>
        <i class="fas fa-exclamation-triangle"></i>
    </div>
@endif
