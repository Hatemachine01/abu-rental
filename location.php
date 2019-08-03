<!doctype html>
<html lang="en">
  <?php include 'navbar.php'; ?>
  <body body data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="flbackdrop"></div>
  <div class=" container">
  <h1>Directions</h1>
  <div class="row">
    <div class="col-sm-6">
      <p>  
      The road leaving the terminal is Airport Way. Follow Airport Way to Interstate 205 South. Go south on I-205 for 3 miles to Exit 21B – Interstate 84 (Banfield Highway). Take I-84 West toward downtown Portland for 6 miles. Exit on your left to I-5 South. Take I-5 for 1.5 miles across the bridge, exiting left onto Interstate 405 North. Take I-405 for 1.5 miles to Exit 1D (right) to Highway 26 – Sunset Highway. Take Highway 26 west for 75 miles to Highway 101 at the coast. Go 1.5 miles north on Highway 101 to Seaside.
      </p>
    </div>
    <div class="col-sm-6">
      <div class="google-maps">
    <iframe src="https://maps.google.com/maps?q=seaside%20&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
 </div> 

<?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/e0cd718ba0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
<script src="js/fakeLoader.min.js"></script>  
<script>
  $(document).ready(function () {
        $.fakeLoader({
            bgColor: '#0178bd ',
            spinner:"spinner1"
            });
        });
    </script>
<script type="text/javascript">$(".flbackdrop").remove();</script>
<div class="fakeLoader"></div>
  </body>
</html>