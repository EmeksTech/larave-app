@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->pull('success') }}
    </div>
@endif
