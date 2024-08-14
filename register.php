<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .input-error {
      border-color: red;
    }

    .slide-popup {
      position: fixed;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #f44336;
      color: white;
      padding: 16px;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: top 0.5s;
      z-index: 1000;
      display: none; /* Initially hidden */
    }

    .slide-popup.show {
      top: 20px;
      display: block; /* Show when popup has 'show' class */
    }
  </style>
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="./images/logo-dark.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only a few steps</h6>
              <form class="pt-3 register-form" id="register-form" action="actregister.php" method="POST">

                <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="name" name="name" placeholder="Enter name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="username" name="username" placeholder="Username" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" id="email" name="email" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Phone</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-phone-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="phone" name="phone" placeholder="Phone" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control form-control-lg" id="country" name="country" required>
                    <option value="">Country</option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="IND">India</option>
                    <option value="GER">Germany</option>
                    <option value="ARG">Argentina</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="password" name="password" placeholder="Password" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                  </div>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck" value="agreed" required>
                    <label class="form-check-label text-muted" for="termsCheck">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="index.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021 All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="slide-popup" class="slide-popup">Username or Email already exists.</div>

  <!-- container-scroller -->
  <!-- base:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="./js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/template.js"></script>
  <!-- endinject -->

  <script>
  $(document).ready(function() {
    $('#register-form').submit(function(e) {
      e.preventDefault(); // Prevent default form submission

      // Check if passwords match
      var password = $('#password').val();
      var confirmPassword = $('#confirm-password').val();
      var popup = $('#slide-popup');

      if (password !== confirmPassword) {
        $('#password').addClass('input-error');
        $('#confirm-password').addClass('input-error');
        popup.text('Passwords do not match.');
        popup.addClass('show');
        setTimeout(function() {
          popup.removeClass('show');
        }, 3000); // Hide the popup after 3 seconds
        return;
      } else {
        $('#password').removeClass('input-error');
        $('#confirm-password').removeClass('input-error');
      }

      $.ajax({
        type: 'POST',
        url: 'actregister.php',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(response) {
          if (response.status === 'success') {
            alert(response.message);
            setTimeout(function() {
              window.location.href = 'index.php';
            }, 2000);
          } else {
            popup.text(response.message);
            popup.addClass('show');
            setTimeout(function() {
              popup.removeClass('show');
            }, 3000); // Hide the popup after 3 seconds
          }
        },
        error: function(xhr, status, error) {
          console.error('AJAX Error:', status, error);
          alert('An error occurred. Please try again.');
          setTimeout(function() {
            window.location.reload();
          }, 2000);
        }
      });
    });
  });
  </script>

</body>
</html>