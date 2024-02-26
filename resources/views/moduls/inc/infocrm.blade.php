@if ($errors->any())
    <div class="errors">
        <ul>
             @foreach ($errors->all() as $error)
                <li>{{  $error }}</li>
                @endforeach
         </ul>
    </div>
@endif

@if (session('success'))
<div class="errors soccess">
{{ session('success') }}
</div>
@endif
