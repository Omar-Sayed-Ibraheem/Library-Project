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
      
        <!-- <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="div_center mb-4 font-medium text-sm text-green-600">
                        <h1 class="lables">Add Category</h1>
                        <form>
                            <span style="padding-right: 15px;">
                            <lable>Category Name</lable>
                            <input type="text" name="category" require>
                            </span>
                            <input type="submit" value="Add Category" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div> -->
        <div class="page-content">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white text-center">
                            <h1 class="h4">Add Category</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('add_category')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="categoryName" name="category" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Category</button>
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