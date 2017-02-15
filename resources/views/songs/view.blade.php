<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Tweet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Tweet</th>
            </tr>
            </thead>
            @foreach ($tweets as $tweet)
              <tr>
                <td>{{ $tweet->tweet }}</td>
              </tr>
            @endforeach

        </table>

      <button>  <a href="/" class="btn">Back to tweets</a> </button>

    </div>

</body>
</html>
