    
    
    <section id="footer-section" class="bg-dark py-3 mt-3">
      <div class="container">
        <div class="text-center text-white">
          <div class="h4" >Healthy</div>
        </div>
      </div>
    </section>

    <!-- LOGIN MODAL -->
    <div class="modal" id="loginModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <form method="POST" action="{{ route('login') }}">
            <div class="modal-body">
              
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" placeholder="Email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" placeholder="Password" name="password"  class="form-control">
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" >Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script>
        $('body').scrollspy({
          target: '#main-nav',
        })
    
        // Add scroll smoothing
        $('#main-nav a').on('click', function(e) {
          if (this.hash !== '') {
            e.preventDefault();
    
            const hash =  this.hash;
    
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function() {
              window.location.hash = hash;
            })
          }
        })
      </script>
</body>

</html>