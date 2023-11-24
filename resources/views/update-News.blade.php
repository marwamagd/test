<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update News</h2>
  <form action="{{route('update-News', $new->id)}}" method="post">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" value="{{$new->NewsTitle}}" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" name="content" rows="5" id="content"> {{$new->Content}} </textarea>
      </div>    
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" value="{{$new->Author}}" placeholder="Enter author name" name="author">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"  @checked($new->published) > Published</label>
    </div>
    <button type="submit" class="btn btn-default">Updte News</button>
  </form>
</div>

</body>
</html>