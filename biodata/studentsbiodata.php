<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  background-color: #00bfff;
  text-align: center;
  font-family: 'Raleway', Helvetica, sans-serif;
  min-width: 320px;
}

header {
  font-size: 2em;
  font-weight: bold;
  margin: 20px;
}

#form-outer {
  background-color: rgb(250, 250, 250);
  margin: 0 auto;
  border-radius: 4px;
  width: 75%;
  max-width: 900px;
  padding: 10px;
  padding-top: 20px;
}

.labels {
  display: inline-block;
  text-align: right;
  width: 40%;
  padding: 5px;
  vertical-align: top;
  margin-top: 10px;
}

.rightTab {
  display: inline-block;
  text-align: left;
  width: 48%;
  vertical-align: middle;
}

.input-field {
  height: 20px;
  width: 280px;
  padding: 5px;
  margin: 10px;
  border: 1px solid #c0c0c0;
  border-radius: 2px;
}

#userAge {
  width: 40px;
}

.userRatings,
input[type="checkbox"] {
  float: left;
  margin-right: 5px;
}

#submit {
  background-color: #1a8cff;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  height: 40px;
  width: 96px;
  margin: 10px;
  border: 0px solid;
}

#reset {
  background-color: #1a8cff;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  height: 40px;
  width: 96px;
  margin: 10px;
  border: 0px solid;
}
.dropdown {
  height: 35px;
  width: 140px;
  padding: 5px;
  margin: 10px;  
  margin-top: 15px;
  border: 1px solid #c0c0c0;
  border-radius: 2px;
}

.radio, .checkbox {
  position: relative;
  left: -43px;
  margin-left: 10px;
  display: block;
  padding-bottom: 10px;
}

@media screen and (max-width: 833px) {
  .input-field {
    width: 80%;
  }
  select {
    width: 90%;
  }
}

@media screen and (max-width: 520px) {
  .labels {
    width: 100%;
    text-align: left;
  }
  .rightTab {
    width: 80%;
    float: left;
  }
  .input-field {
    width: 100%;
  }
  select {
    width: 100%;
  }
}
    </style>
</head>
<body>
<h1 id="title">Bio Data Form</h1>
<div id="form-outer">
  <p id="description">
    To know the details of students
  </p>
  <form id="survey-form" method="GET" action="biodata2.php">
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="name">Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="fname-label" for="fname">Father's Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="fname" id="fname" class="input-field" placeholder="Enter your father's name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="mname-label" for="mname">Mother's Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="mname" id="mname" class="input-field" placeholder="Enter your mother's name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="email-label" for="email">Email: </label>
      </div>
      <div class="rightTab">
        <input type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="number-label" for="age">Age: </label>
      </div>
      <div class="rightTab">
        <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="dob-label" for="dob">D.O.B: </label>
      </div>
      <div class="rightTab">
        <input type="date" name="dob" id="iddob" class="input-field" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label for="department">Department: </label>
      </div>
      <div class="rightTab">
        <select id="dropdown" name="department" class="dropdown">
        <option disabled value>Select an option</option>
        <option value="it">IT</option>
        <option value="cse">CSE</option>
        <option value="ece">ECE</option>
        <option value="mech">MECH</option>
        <option value="civil">CIVIL</option>
        <option value="other">Other</option>
        </select>
      </div>
    </div>
    
    <!-- <div class="rowTab">
      <div class="labels">
        <label for="gender">Gender: </label>
      </div>
      <div class="rightTab">
        <ul style="list-style: none;" name="gender">
          <li class="radio"><label><input name="radio-buttons" value="male"  type="radio" class="userRatings" >Male</label></li>
          <li class="radio"><label><input name="radio-buttons" value="female"  type="radio" class="userRatings" >Female</label></li>
          <li class="radio"><label><input name="radio-buttons" value="others"  type="radio" class="userRatings" >Others</label></li>
        </ul>
      </div>
    </div> -->
    <div class="rowTab">
      <div class="labels">
        <label for="address">Address: </label>
      </div>
      <div class="rightTab">
        <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="address" placeholder="Enter your address here..."></textarea>
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label for="pincode">Pincode: </label>
      </div>
      <div class="rightTab">
       <input type="number" name="pincode" id="idpincode" class="input-field" style="height:20px;resize:vertical;" placeholder="6 - - - - -"></div>
    </div>
    
       <!-- <div class="rowTab">
      <div class="labels">
        <label for="language">Language Known: </label>
      </div>
      <div class="rightTab">
        <ul id="language" style="list-style: none;" name="language">
          <li class="checkbox"><label><input name="prefer" value="english" type="checkbox" class="userRatings">English</label></li>
          <li class="checkbox"><label><input name="prefer" value="tamil" type="checkbox" class="userRatings">Tamil</label></li>
          <li class="checkbox"><label><input name="prefer" value="hindi" type="checkbox" class="userRatings">Hindi</label></li>
          <li class="checkbox"><label><input name="prefer" value="malayalam" type="checkbox" class="userRatings">Malayalam</label></li>
          <li class="checkbox"><label><input name="prefer" value="kannada" type="checkbox" class="userRatings">Kannada</label></li>
          <li class="checkbox"><label><input name="prefer" value="telugu" type="checkbox" class="userRatings">Telugu</label></li>
          <li class="checkbox"><label><input name="prefer" value="others" type="checkbox" class="userRatings">Others</label></li>
        </ul>
      </div>
    </div>
     -->
    <button id="submit" type="submit">Submit</button>
    <button id="reset" type="reset">Reset</button>
  </form>
</div>  
</body>
</html>