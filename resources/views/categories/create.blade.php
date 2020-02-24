@extends('layouts.app')


@section('content')
<div class="card card-default">
  <div class="card-header">
    {{ isset($category) ? 'Edit Category' : 'Create Category' }}
  </div>
  <div class="card-body">
    <form id="form" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="post">
      @csrf
      @if(isset($category))
        @method('PUT')
      @endif
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value=" {{ isset($category) ? $category->name : '' }} " class="form-control">

      </div>
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-success">
          {{ isset($category) ? 'Update Category' : 'Add Category' }}
        </button>
      </div>

    </form>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
      $('#form').validate({
        errorPlacement: function(error, element) {
    		    var n = element.attr("name");
            element.attr("placeholder", "*Please fill in the required field");
        },
        rules: {
          name: "required",
          // lastname: "required",
          // email: {
          //   required: true,
          //   // Specify that email should be validated
          //   // by the built-in "email" rule
          //   email: true
          // },
          // password: {
          //   required: true,
          //   minlength: 5
          // }
        },
        // Specify validation error messages
        messages: {
          name: "Please enter the name of category",
          // lastname: "Please enter your lastname",
          // password: {
          //   required: "Please provide a password",
          //   minlength: "Your password must be at least 5 characters long"
          // },
          // email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
          form.submit();
        }
    });
  });
</script>


@endsection
