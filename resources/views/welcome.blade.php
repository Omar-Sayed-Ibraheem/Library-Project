<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LibraryPro</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Library<span>Pro</span></a> <small>put your slogan here</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
      @if (Route::has('login'))
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Support</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
                                @auth
                                    <li><a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a></li>
                                @else
                                    <li><a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a></li>

                                    @if (Route::has('register'))
                                    <li><a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a></li>

                                    @endif
                                @endauth
                        @endif
        </ul>
                        
                            
      </div>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="content_resize2">
        <div class="mainbar">
          <div class="article">
            <h2><span>Template</span> License</h2>
            <div class="clr"></div>
            <p><span class="date">Date: <a href="#">16.03.2018</a></span> &nbsp;|&nbsp; Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
            <img src="images/img1.jpg" width="617" height="197" alt="" />
            <p>This is a free CSS website template by AtomicWebsiteTemplates.com. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to use it for any personal or commercial purpose provided the credit links in the template footer are left intact.</p>
            <p class="spec"><a href="#" class="com"><span>11</span> Comments</a> <a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="article">
            <h2><span>Office</span> interior</h2>
            <div class="clr"></div>
            <p><span class="date">Date: <a href="#">15.03.2010</a></span> &nbsp;|&nbsp; Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
            <p>Mauris ac odio massa. Maecenas tellus turpis, consequat et congue vitae, dignissim ac sem. Nunc feugiat rhoncus libero, sed venenatis quam accumsan sed. Praesent malesuada fringilla pulvinar. Curabitur sodales urna a orci volutpat mollis. Vivamus sit amet leo a leo condimentum iaculis. Sed sodales mattis eleifend. Aliquam sed condimentum massa. Nullam at orci nibh. Aliquam luctus fringilla facilisis. Nam imperdiet.</p>
            <p class="spec"><a href="#" class="com"><span>7</span> Comments</a> <a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">TemplateInfo</a></li>
              <li><a href="#">Style Demo</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Sponsors</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="#">Lorem ipsum dolor</a><br />
                Donec libero. Suspendisse bibendum</li>
              <li><a href="#">Dui pede condimentum</a><br />
                Phasellus suscipit, leo a pharetra</li>
              <li><a href="#">Condimentum lorem</a><br />
                Tellus eleifend magna eget</li>
              <li><a href="#">Fringilla velit magna</a><br />
                Curabitur vel urna in tristique</li>
              <li><a href="#">Suspendisse bibendum</a><br />
                Cras id urna orbi tincidunt orci ac</li>
              <li><a href="#">Donec mattis</a><br />
                purus nec placerat bibendum</li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pix1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue.</p>
        <p><a href="#">support@yoursite.com</a></p>
        <p>+1 (123) 444-5677<br />
          +1 (123) 444-5678</p>
        <p>Address: 123 TemplateAccess Rd1</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lr">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="lf">Design by <a href="http://www.atomicwebsitetemplates.com/">Atomic Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
