<section class="container py-5">
    <div class="container p-0">
      <!-- container -->
      <div class="row gy-3">
        <div class="col-lg-6">
          <h5 class="text-uppercase">Let's be friends!</h5>
          <p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
        </div>
        
        <div class="col-lg-6">
          <form action="{{route('subscribe.index')}}" method="post">
            @csrf
            <div class="input-group">
              <input class="form-control form-control-lg" name="email" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
              <button class="btn btn-dark" name="" id="button-addon2" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  {{-- ?php 
  if (isset($_POST['submit_2'])) {
   $email=$_POST['email'];
  $q_1=mysqli_query($con,"insert into subscribers (user_email) value ('$email')");
  }
  ? --}}


<footer class="bg-dark text-white">
  <div class="container py-4">
    <div class="row py-5">
      <div class="col-md-4 mb-3 mb-md-0">
        <h6 class="text-uppercase mb-3">Customer services</h6>
        <ul class="list-unstyled mb-0">
          <li><a class="footer-link" href="{{route('contact.index')}}">Help &amp; Contact Us</a></li>
          <li><a class="footer-link" href="{{route('refund.index')}}">Returns &amp; Refunds</a></li>
          <li><a class="footer-link" href="{{route('condition.index')}}">Terms &amp; Conditions</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <h6 class="text-uppercase mb-3">Company</h6>
        <ul class="list-unstyled mb-0">
          <li><a class="footer-link" href="{{route('latest.index')}}">Latest Posts</a></li>
          <li><a class="footer-link" href="{{route('faq.index')}}">FAQs</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="text-uppercase mb-3">Social media</h6>
        <ul class="list-unstyled mb-0">
          <li><a class="footer-link" href="">Twitter</a></li>
          <li><a class="footer-link" target="_blank" href="">Instagram</a></li>
          <li><a class="footer-link" target="_blank" href="">Facebook</a></li>
          <li><a class="footer-link" target="_blank" href="">Pinterest</a></li>
        </ul>
      </div>
    </div>
    <div class="border-top pt-4" style="border-color: #1d1d1d !important">
      <div class="row text-center">
          <p class="small text-muted mb-0">&copy; 2024 PrintProArtistry All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>