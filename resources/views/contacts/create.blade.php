@extends('layouts.default', ['title' => 'Contact'])

@section('content')

<div class="container mt-5">

<div class="row">
  <div class="col-md-8 offset-md-2">
    <h2>Get in touch</h2>
    <form class="" action="#" method="post">

        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required="required">
        </div>

        <div class="form-group">
            <label for="message" class="control-label sr-only">Massage</label>
            <textarea name="message" id="message" class="form-control" required="required"></textarea>
        </div>

        <div class="form-group">
          <button type="button" name="button" class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
        </div>

    </form>
  </div>


</div>
</div>

@stop
