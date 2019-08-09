<!doctype html>
<html lang="en">
 <link rel="stylesheet" href="css/fakeLoader.min.css">
<?php include 'navbar.php'; ?>
<div class="flbackdrop"></div>
<body body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container">
  <div class="responsive">
  <iframe src="https://calendar.google.com/calendar/embed?src=lr8n642mbtm43guvup1r8qiakg%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
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