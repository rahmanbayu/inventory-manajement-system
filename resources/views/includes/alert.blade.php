<div class="container">
  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
      </div>
  @endif
  @if (session()->has('failed'))
      <div class="alert alert-danger" role="alert">
        {{ session()->get('failed') }}
      </div>
  @endif
</div>