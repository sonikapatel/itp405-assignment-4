<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Songs</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
      		@if (session('successStatus'))
      			<div class="alert alert-success" role="alert" style="width:70%;text-align:center;margin:auto;">
      				{{  session('successStatus') }}
      			</div>
      		@endif

          @if (count($errors) > 0)
              <div class="alert alert-danger" role="alert"style="width:70%;text-align:center;margin:auto;">
                <ul>
                  @foreach ($errors->all() as $error)
                  {{ $error }}
                  @endforeach
                </ul>
              </div>
            @endif


      <div style="padding:20px;width:70%; text-align:center; margin:auto;">
        <!-- //post tweet -->
          <form action="/" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="tweet">Tweet</label>
              <input type="text" name="tweet" class="form-control" id="tweet">
            </div>
            <button style="text-align:center; margin:auto;"type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>



<!-- display tweets -->
      <div class="row">
        <div class="col-xs-12">
          <table class="table" style="width:70%; text-align:center; margin:auto;">
            <thead>
              <tr>
                <th>Tweet</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($tweets as $tweet)
                <tr>
                  <td>{{ $tweet->tweet }}</td>
                  <td>
                    <a href="/tweets/{{$tweet->id}}">View</a>
                    <span> | <span>
                    <a href="/tweets/{{ $tweet->id }}/delete">X</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
