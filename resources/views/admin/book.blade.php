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
                                <form action="{{url('add_book')}}" method="post">
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
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Book</button>
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