@extends('frontendtemplate')

@section('content')

  
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
     <img src="{{asset('img/ban.jpg')}}" class="img-fluid" style="height: 400px;width: 100%;">
      
      
      
    </div>
  </div>
</div>


	 <div class="container mt-3">
    <div class="row">
      <div class="col-12">
  <section>
      <div class="row m-auto">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61103.273668204485!2d96.125637!3d16.828608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x527ce62d7d94f9ec!2sRuby%20Car%20Rental%20Service!5e0!3m2!1sen!2smm!4v1583344896913!5m2!1sen!2smm" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <div class="row mt-3">
        <div class="col-12">
          <h2 class="contact-title">Contact Us</h2>
        </div>

        <div class="col-lg-8">
         <form method="POST">
          <div class="row">

             <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>

                <div class="form-group">
                  <input class="form-control" name="email" id="eamil" type="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="number" placeholder="Enter your phone">
                </div>
             </div>

           <div class="col-sm-6">
            <div class="form-group">
             <textarea class="form-control w-100" name="message" id="message" cols="30" rows="6" placeholder="Enter Address"></textarea>
            </div>
           </div>

             <div class="col-sm-12">
            <div class="form-group">
             <textarea class="form-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
            </div>
           </div>

             <div class="form-group" style="margin-bottom: 80px; margin-left: 15px;">
              <button type="submit" class="btn btn-outline-danger">Send Message</button>
             </div>

          </div>
         </form>

        </div>

        <div class="col-lg-4">
          <div class="row">
            <span style="font-size: 2em; color: Dodgerblue;"><i class="fa fa-home"></i></span>
              <div class="media-body">
              <h4>&nbsp;Myanmar Yangon. </h4>
              <p>&nbsp; Pyay road, NC 42(Company) </p>
              </div>
          </div>

          <div class="row">
            <span style="font-size: 2em; color: Tomato;"><i class="fa fa-phone"></i></span>
              <div class="media-body">
              <h4><a href="tel:09-975976912"> &nbsp; 09-975 976 912</a><br>
                  <a href="tel:09-796635158"> &nbsp; 09-796 635 158</a>
              </h4>
              <p>&nbsp;&nbsp;Mon to Fri 10am to 5pm</p>
              </div>
          </div>

          <div class="row">
            <span style="font-size: 2em;color: Mediumslateblue;"><i class="fa fa-envelope-o"></i></span>
              <div class="media-body">
              <h4><a href="mailto:linnandaaung.1234@gmail.com">&nbsp; linnandaaung.1234@gmail.com </a>
                  <a href="mailto:kyawzeya2001@gmial.com">&nbsp;&nbsp;kyawzeya2001@gmail.com </a>
              </h4>
              <p>&nbsp;&nbsp;Send us your email anytime!</p>
              </div>
          </div>

          <div class="row">
            <span style="font-size: 2em; padding-right: 10px;"><a href="https://www.facebook.com"><i class="fa fa-facebook-f"></i></a></span>
            <span style="font-size: 2em; padding-right: 10px;"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></span>
            <span style="font-size: 2em; padding-right: 10px;"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></span>
            <span style="font-size: 2em; padding-right: 10px;"><a href="https://www.skype.com"><i class="fa fa-skype"></i></a></span>
          </div>

        </div>

      </div>
    </section>
      </div>
    </div>
  </div>

@endsection