@extends ('moduls.app')
@section ('content')
<div class="site-blocks-cover header-crm-block" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center header-crm-block">
        <div class="col-md-12 mt-lg-5 text-center">
          <h1 class="mb-4">Керування контентом</h1>
        </div>
      </div>
    </div>
  </div>   
  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-content">

        </div>
        <div class="col-md-4 sidebar">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <!-- <input type="text" class="form-control" placeholder="Type a keyword and hit enter"> -->
              </div>
            </form>
          </div>
          <div class="sidebar-box">
            <div class="categories">
              <h3>Категорії</h3>
              <li><a href="#">Коментарі на головній сторінці</a></li>
              <li><a href="#">Counselling <span>(22)</span></a></li>
              <li><a href="#">Design <span>(37)</span></a></li>
              <li><a href="#">Events<span>(42)</span></a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection