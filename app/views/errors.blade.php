
@if ($errors->any())
  <!-- Show the errors -->
  <div class="alert alert-danger">
    <!-- Close the error box -->
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Please fix the errors:</strong>
    <ul>
      <!-- Print the error list on screen -->
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
