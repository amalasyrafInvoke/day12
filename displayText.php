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

  <form id="form-container" action="peopleClass.php" method="POST">

    <?php
    class PeopleClass
    {
      public $name;
      public $dob;
      public $hobby;
      private $age;

      function __construct($name, $dob, $hobby)
      {
        $this->name = $name;
        $this->dob = $dob;
        $this->hobby = $hobby;
      }

      function setAge()
      {
        $yearDate = substr($this->dob, 0, 4);
        $thisYear= date("Y");
        $myAge = $thisYear - $yearDate;
        $this-> age = $myAge;
      }

      function displayStatement()
      {
        echo "Hi $this->name, you are $this->age years old! You like to confuse yourself with OOP!";
      }
    }


    if (isset($_POST['submit-btn'])) {
      $kevin = new PeopleClass($_POST['fname'], $_POST['dob'], $_POST['hobby']);
      echo "<br>Hello, <br>";
      echo $kevin -> setAge();
      echo $kevin -> displayStatement();
    }

    ?>
    <input type="submit" name="submit-btn" value="Back">

  </form>


</body>

</html>