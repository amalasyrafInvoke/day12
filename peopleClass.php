<html>

<head>
  <title>PHP Day 12 Quiz</title>

  <style>
    #form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    #form-container>* {
      margin: 0.5rem 0;
    }
  </style>
</head>

<body>

  <h2>Day 12 Quiz</h2>

  <form id="form-container" action="displayText.php" method="POST">
    <label for="fname">Name </label>
    <input type="text" name="fname" id="fname" placeholder="Enter your name">
    <label for="dob">Date of Birth </label>
    <input type="date" name="dob" id="dob">
    <label for="hobby">Your Hobby </label>
    <input type="text" name="hobby" id="hobby" placeholder="Enter your hobby">

    <input type="submit" name="submit-btn" value="Submit">

  </form>


</body>

</html>