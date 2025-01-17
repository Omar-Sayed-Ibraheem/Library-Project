
<div class="currently-market">
<div class="card-header bg-primary text-white text-center">
<h1 class="h4">Search book</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{url('search_book')}}" method="get">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Book Title</label>
                                        <input type="text" class="form-control" name="search" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>
              <li data-filter=".msc">Popular</li>
              <li data-filter=".dig">Latest</li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">

          @foreach($data as $data)
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="BookImages/{{$data->Book_Img}}" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->Book_Title}}</h4>
                  <span class="author">
                    <img src="AuthorImages/{{$data->Book_Author_Img}}" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>{{$data->Book_Author}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>{{$data->Book_Quantity}}</strong><br> 
                  </span>
                  <span class="ends">
                    Price<br><strong>{{$data->Book_Price}}</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                  <br>
                  <div class="">
                    <a href="{{url('borrow_books', $data->id)}}" class="btn btn-primary">Request this book</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
