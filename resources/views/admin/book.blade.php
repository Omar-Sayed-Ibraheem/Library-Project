<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            margin: auto;
        }
        .lables
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
        <div class="page-content">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white text-center">
                            <h1 class="h4">Add Book</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('add_book')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="BookTitle" class="form-label">Book Title</label>
                                        <input type="text" class="form-control" id="BookTitle" name="BookTitle" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="BookAuthor" class="form-label">Book Author</label>
                                        <input type="text" class="form-control" id="BookAuthor" name="BookAuthor" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="BookPrintNum" class="form-label">Book Print Num</label>
                                        <input type="text" class="form-control" id="BookPrintNum" name="BookPrintNum" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="BookPrice" class="form-label">Book Price</label>
                                        <input type="text" class="form-control" id="BookPrice" name="BookPrice" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Bookdescription" class="form-label">Book description</label>
                                        <input type="text" class="form-control" id="Bookdescription" name="Bookdescription" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="BookQuantity" class="form-label">Book Quantity</label>
                                        <input type="text" class="form-control" id="BookQuantity" name="BookQuantity" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Book Image</label>
                                        <input type="file" class="form-control" name="BookImg">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Book Author Image</label>
                                        <input type="file" class="form-control" name="BookAuthorImg">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Category" class="form-label">Category Please specify</label>
                                        <select class="form-control" name="category" required>
                                            @foreach($data as $data)
                                            <option class="form-control" value="{{$data->id}}">{{$data->Category_Title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-grid">
                                        <input type="submit" class="btn btn-primary" value="Add Book">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      @include('admin.footer')
  </body>
</html>