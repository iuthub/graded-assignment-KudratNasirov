@if(count($errors)>0)

    @foreach($errors->all() as $error)

        <div class="error">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
<div class="success">
    {{session('success')}}
</div>
@endif

@if(session('error'))
    <div class="error">
        {{session('error')}}
    </div>
@endif
