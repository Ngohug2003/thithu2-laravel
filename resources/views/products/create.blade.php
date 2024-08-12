<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-5">Them san pham</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    
                </ul>
            </div>
        @endif
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($cateogries as  $id =>$name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
              </div>
            <div class="mb-3 mt-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name"  name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3 mt-3">
                <label for="image" class="form-label">image_path</label>
                <input type="file" class="form-control" id="image_path"  name="image_path">
              </div>
              <div class="mb-3 mt-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price"  name="price" value="{{old('price')}}">
              </div>
              <div class="mb-3 mt-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" >{{old('description')}}</textarea>
              </div>
              <div class="mb-3 mt-3">
                <label for="tags" class="form-label">Tags</label>
                <select multiple name="tags[]" id="tags" class="form-control">
                    @foreach ($tags as  $id =>$name)
                        <option  value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3 mt-3">
                <label for="image" class="form-label">Gallery1</label>
                <input type="file" class="form-control" id="gallery_1"  name="gallery[]">
              </div>
              <div class="mb-3 mt-3">
                <label for="image" class="form-label">Gallery2</label>
                <input type="file" class="form-control" id="gallery_2"  name="gallery[]">
              </div>
              <a class="btn btn-info" href="{{route('product.index')}}">Quay lai</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>