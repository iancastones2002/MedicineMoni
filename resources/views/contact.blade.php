<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact Us Form</title>
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <footer class="all">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Davao City</div>
            <div class="text-two">Barangay 19B J Palma Gil</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+639 6273 392</div>
            <div class="text-two">+0096 3434 5678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">medwatch@gmailcom</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="topic-text">Send us a message</div>
          <p class="huh">If you have any work from me or any types of queries related to my tutorial, you can send me a message from here. It's my pleasure to help you.</p>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your phone no.">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send Now">
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>
