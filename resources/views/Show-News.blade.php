<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>News</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Published</th>
        <th>Edite</th>

      </tr>
    </thead>
<tbody>
@foreach ($News as $new)
      <tr>
      <td>{{$new->NewsTitle}}</td>
      <td>{{$new->Content}}</td>
      <td>{{$new->Author}}</td>
      @if( $new->published=== 1)
        <td > Yes✅</td>
        @else
        <td > No❌</td>

        @endif  
        <td><a href="edit-News/{{$new->id}}">Edit</a></td>
     </tr>
        
@endforeach
    </tbody>
  </table>
</div>

</body>
</html>
                  😍❤