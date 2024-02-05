<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Services - Iligan City Job Services</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="website-header-div">
      <p class="website-logo-text1">Iligan City Job & Services</p>
      <p class="website-logo-text2">Elevating Opportunities, Connecting Communities.</p>
    </div>
    <hr class="grid-item">
    <div>
      <div class="navigation-container">
          <div class="float-item">
            <p>You are here: <a href="home.php">Home</a>/ Profile</p>
          </div>
          <div class="float-item">
            <p>
              <a href="sign-in.php" >Sign in</a>
              |
              <a href="sign-up.php" >Sign up</a>
            </p>
          </div>
      </div>
    </div>
    <hr class="grid-item">
  <div class="services-list-div">
      <p>Job & Services List</p>
  </div>
  <div class="box" id="myDiv">
    <div class="advisory-message">
      <div class="advisory-text-div">
        <h3>ADVISORY!</h3>
        <button class="advisory-remove-button" onclick="hideDiv()">&#10005;</button>
      </div>
      <div>
        <p class="advisory-paragraph">This Services Portal of  Iligan City Services (ICS), is dedicated to offering information about various services available in Iligan City. The details provided here are sourced from local service providers and adhere to the goals established by the Iligan Computer Institute.</p>
        <p class="advisory-paragraph">It's important to clarify that our platform is not involved in the processing or facilitation of service applications. Any inquiries, service requests, or related questions should be directed to the respective service providers whose contact information is made available on this website.</p>
        <p class="advisory-paragraph">It's crucial to note that the Iligan City Services Hub does not guarantee the accuracy, completeness, or suitability of the information presented on this platform. We disclaim any legal liability or responsibility for the outcomes arising from the use of the information provided. Users are encouraged to verify details directly with the concerned service providers.</p>
      </div>
    </div>
  </div>

  <script>
    function hideDiv() {
      var div = document.getElementById('myDiv');
      div.classList.add('hidden');
    }
  </script>

</body>
</html>