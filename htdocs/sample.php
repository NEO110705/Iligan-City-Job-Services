<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Section - CSS Platform</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <h1 class="text-center">Profile Section</h1>
  <div id="profile" class="text-center">
    <img src="profile_picture.jpg" alt="Your Profile Picture" class="rounded-circle">
    <h2>Provider Name</h2>
    <button id="editProfileBtn" class="btn btn-primary">Edit Profile</button>
    <div id="profileDetails" class="mt-4">
      <p><strong>Description:</strong></p>
      <p id="description">Brief description of your services and expertise</p>
      <p><strong>Category:</strong> <span id="category">Selected category</span></p>
      <p><strong>Location:</strong> <span id="location">Your location</span></p>
      <p><strong>Contact Information:</strong></p>
      <p>Email: <span id="email">Your email address</span></p>
      <p>Phone: <span id="phone">Your phone number</span></p>
      <p>Social Media: <span id="socialMedia">Links to your social media profiles</span></p>
      <p><strong>Additional Information:</strong></p>
      <p id="additionalInfo">Additional fields for service hours, pricing, certifications, etc.</p>
    </div>
    <button id="saveChangesBtn" class="btn btn-success" style="display:none;">Save Changes</button>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
