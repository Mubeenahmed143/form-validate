<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    

<h1>HTML FORM</h1>

<form action="data.php" method="POST" class="form-group mt-5" >
<fieldset>
    <legend>
    Personal Details
</legend>

<br>

<label> Applicant's full name</label>
<select id="name" name="select" >
    <option>---Select---</option>
    <option> Mr</option>
    <option> Mrs</option>
</select >
<input id="name2" type="text" name="name" >


<label style="margin-left :130px" id="care" > Gender</label>

<Label style="margin-left :100px"  id="gender">Male</Label>
<input  id="male" type="radio" name="gender"  >


<label> Female</label>
<input id="female" type="radio" name="gender"  >

<label> Others</label>
<input id="other" type="radio" name="gender"  >

<br><br><br>
<label> Father's Name</label>
<select id="mrs" name="mr">
    <option>Mr</option>
    
    
</select>
<input type="text" name="fname" >

<label id="Mother"> Mother's Name</label>
<select id="mr" name="mrs" >
    <option>Mrs</option>
   
    
</select>
<input type="text" name="mname" >

<br><br><br>
<label style="margin-left : 10px " id="Religion"> Religion</label>
<select style="margin-left : 190px " id="religion" name="religion" >
    <option>--Select--</option>
    <option> Islam</option>
    <option> Hindu</option>
    <option> Christan</option>
    
</select>

<label style="margin-left : 340px" id="db"> Date of Birth</label>
<input style="margin-left :70px" id="dd"  type="date" name="date" >

<br><br><br>

<label> Martial Status</label>
<select id="status" name="status" >
    <option>--Select--</option>
    <option> Single</option>
    <option> Marriege</option>
    <option> Engagged</option>
</select>

<label id="category"> Category</label>
<select id="category1" name="category" >

    <option>--Select--</option>
    <option> Student</option>
    <option> Employe</option>
    <option> UnEmploye</option>
    <option> Bussiness Man</option>
</select>

<br><br><br>











<br><br>
</fieldset>

<fieldset>
<legend>
    Contact Details
</legend>

<br>

<label> Mobile Number</label>
<input id="mn" type="number" name="number"  >

<label id="em"> Email Id</label>
<input id="el" type="email" name="email" >

<br><br><br>

<label> Address Line 1</label>
<input id="a1" type="text" name="address" >

<label id="A2"> Address Line 2</label>
<input id="a2" type="text" name="address2" >

<br><br><br>

<label> City</label>
<input id="city" type="text" name="city" >

<label id="state"> State</label>
<select id="country" name="country" >
    <option>--Select--</option>
    <option> Pakistan</option>
    <option> Saudia Arabia</option>
    <option> Dubai</option>
    <option> Afghanistan</option>
    <option> Turkey</option>
</select>

<br><br><br>

<label> Pin Code</label>
<input id="pc" type="text" name="code" >
<br>
<br>

</fieldset>

<fieldset>
    <legend>
        Qualification Details 
    </legend>
<br>

  <label id="srno">  Sr No.</label>
  <label id="qual">   Qualification  </label>
  <label id="board">  Board/University</label>
  <label id="year">     Passing Year </label>
  <label id="max">     Max Marks </label>
  <label id="mark">     Marks Obtain </label>
  <label id="percent">    Percentage  </label>

<br><br>

1

<select id="mat" name="subjects" >
    <option id="op">--Select--</option>
    <option> Matric</option>
    <option> Intermediate</option>
    <option> B.Sc</option>
    <option> B.COM</option>
    <option> M.A</option>
    <option> Masters</option>
</select>

<input id="bu" type="text" name="num" >

<input id="py" type="text" name="num" >

<input id="mm" type="text" name="num" >

<input id="mo" type="text" name="num" >

<input id="pt" type="text" name="num" >


<br><br>
</fieldset>

<fieldset>
    <legend>
        Language Knowledge
    </legend>

    <label id="lang"> Language</label>

    <label id="read"> Reading</label>

    <label id="write"> Writing</label>

    <label id="spok"> Spoken</label>

    <br><br>

    <label id="hd"> Urdu</label>

    <input id="ri" type="checkbox" names="u1" >

    <input id="wt" type="checkbox" name="u2" >

    <input id="sp" type="checkbox" name="u3" >

    <br><br>

    <label id="eg"> English</label>

    <input id="rg" type="checkbox" name="e1" >

    <input id="wt" type="checkbox" name="e2" >

    <input id="sp" type="checkbox" name="e3" >

    <br><br>

    <label id="hd"> Hindi</label>

    <input id="rd" type="checkbox" name="n1" >

    <input id="wt" type="checkbox" name="n2" >

    <input id="sp" type="checkbox" name="n3" >
</fieldset>

<fieldset>
    <legend>
        Identification Details
    </legend>

    <br>
    <label id="acn"> 
        Aadhar Card Number
    </label>

<input type="text">

<label id="pcn"> PAN Card Number</label>

<input type="text">
<br><br>
<label> Upload Photo</label>

<input id="but" type="button" value="Choose File">
<label> No file chosen </label>

<label id="us"> Upload Signature</label>

<input id="bt" type="button" value="Choose File">
<label> No file chosen </label>

<br>
</fieldset>

<input type="submit" name="register" value="register" class="btn btn-primary mt-2"  >
    </form>



    
</body>
</html>