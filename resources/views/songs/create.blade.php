<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Songs</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h1>Create a Tweet</h1>

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="/songs" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="title">Tweet</label>
              <input type="text" name="tweet" class="form-control" id="tweet">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
