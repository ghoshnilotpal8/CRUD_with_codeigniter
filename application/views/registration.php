
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>

        <style>
            .error{
                color: red;
            }
            input[type=text], input[type=email], input[type=number], input[type=date] {
                width: 80%;
                padding: 10px;
                margin: 5px 0 9px 0;
                display: inline-block;
                border: 1px;
                border-radius: 5px;
                background: white;
            }
            .container_input {
                padding:10px;
                border-radius: 5px;
                margin: 5px 0 9px 0;
                width:80%
            }
            .container2{
                padding: 10px;
                display: flex;
            }
            .container1left{
                position: relative;
                height: auto;
                width: 45%;
                margin-left: 200px;
            }
            .container1right{
                position:relative;
                height: auto;
                width: 40%;
                margin-left: 0px;
            }
            .container3{
                margin-left: 50px;
                margin-right: 50px;
            }
            .container4{
                position: relative;
                width: 100%;
                height: auto;
                text-align: center;
            }
            .button{
                margin: 20px;
                font-size: 30px;
            }
            table, th, td {

                padding: 15px;
                border: 0px solid black;
            }

        </style>
    </head>
    <body>

        <?php
        if(isset($data)){
            ?>


<?php echo form_open('main/updateuser'); ?>

<div>

    <div class="container1">
        <h1 style="text-align: center; background-color:lightblue;"><strong>Update Form</strong> </h1>
    </div>

        <div class="container2 ">

            <div class="container1left">

                <div>
                    <b>Candidate Name</b><span class="error">* </span><br>
                    <input type="hidden" name="id" value="<?php echo $data[0]->id; ?>">
                    <input type="text" placeholder="Enter Text" name="cName" id="cName" value="<?php echo $data[0]->candidate_name; ?>">
                    <span class="error"><?php echo form_error('cName'); ?></span>
                    
                </div>

                <div >
                    <b>Father Name</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="fname" id="fname" value="<?php echo $data[0]->father_name; ?>">
                    <span class="error"><?php echo form_error('fname'); ?></span>
                    
                </div>

                <div>
                    <b>Mother Name</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="mname" id="mname" value="<?php echo $data[0]->mother_name; ?>">
                    <span class="error"><?php echo form_error('mname'); ?></span>
                    
                </div>

                <div>

                    <b>Select Date of Birth</b><br>
                    <select name="day" class="container_input" id="day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select name="month" class = "container_input" id="month">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>

                    <select name='Year' class = "container_input" id="year">
                        <option value='1983'>1983</option>
                        <option value='1984'>1984</option>
                        <option value='1985'>1985</option>
                        <option value='1986'>1986</option>
                        <option value='1987'>1987</option>
                        <option value='1988'>1988</option>
                        <option value='1989'>1989</option>
                        <option value='1990'>1990</option>
                        <option value='1991'>1991</option>
                        <option value='1992'>1992</option>
                        <option value='1993'>1993</option>
                        <option value='1994'>1994</option>
                        <option value='1995'>1995</option>
                        <option value='1996'>1996</option>
                        <option value='1997'>1997</option>
                        <option value='1998'>1998</option>
                        <option value='1999'>1999</option>
                        <option value='2000'>2000</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Select Gender</b><br>
                    <select name="gender" class = "container_input" style="width: 100%;" id="gender">
                        <option value="Select Gender">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Marrital Status</b><br>
                    <select name="marital_status" class = "container_input" style="width: 100%;" id="maritalStatus"><br>
                        <option value="Select status">Select status</option>
                        <option value="Married">Married</option>
                        <option value="Unmarried">Unmarried</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Select Technology</b>(You want to grown up your Career)<br>
                    <select name="technology" class="container_input" style="width: 100%" id="selectTech">
                        <option value="Select Technology">Select Technology</option><br>
                        <option value="1">T1</option>
                        <option value="2">T2</option>
                        <option value="3">T3</option>
                        <option value="4">T4</option>
                        <option value="5">T5</option>
                        <option value="6">T6</option>
                        <option value="7">T7</option>
                        <option value="8">T8</option>
                        <option value="9">T9</option>
                        <option value="10">T10</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Catagory</b><br>
                    <select name="catagory" class="container_input" style="width: 100%" id="Category">
                        <option value="Select Category">Select Category</option>
                        <option value="1">C1</option>
                        <option value="2">C2</option>
                        <option value="3">C3</option>
                        <option value="4">C4</option>
                        <option value="5">C5</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Address</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="address" id="address" value="<?php echo $data[0]->address; ?>">
                    <span class="error"><?php echo form_error('address'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>District</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="district" id="district" value="<?php echo $data[0]->district; ?>">
                    <span class="error"><?php echo form_error('district'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>Zip/Pin</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="pin" id="zip" value="<?php echo $data[0]->pin; ?>">
                    <span class="error"><?php echo form_error('pin'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>Area of Interest</b><br>
                    <input type="text" placeholder="Enter Text" name="areaOfIntrest" id=areaOfIntrest>
                </div>

                <div class="container_input">
                    <b>Photo Upload</b><br>
                    <button type="submit" class="container_input" style="width: max-content; background-color: lightblue;" id ="phtoUpload">Choose File</button>
                    No choosen file.    
                </div>

            </div>

            <div class="container1right">

                <div class="container_input">
                    <b>Mobile Number</b><span class="error">* </span><br>
                    <input type="number" placeholder="Enter text" name="mobileNo" id="mobileNo" value="<?php echo $data[0]->mobile_no; ?>">
                    <span class="error"><?php echo form_error('mobileNo'); ?></span>
                </div>

                 <div class="container_input">
                    <b>Phone Number</b><br>
                    <input type="number" placeholder="Enter text" name="phoneNumber" id="phoneNumber">
                </div>

                <div class="container_input">
                    <b>Email Id</b><span class="error">* </span><br>
                    <input type="email" placeholder="Enter email"  name="emailId" id="emailId" value="<?php echo $data[0]->email; ?>">
                    <span class="error"><?php echo form_error('emailId'); ?></span>
                </div>

                <div class="container_input">
                    <b>Father's Occupation</b><br>
                    <input type="text" placeholder="Enter text" name="fatherOccupation" id="fatherOccupation">
                </div>

                <div class="container_input">
                    <b>Current Qualification with Branch</b>(If Pursuing mention Semester)<br>
                    <input type="text" placeholder="B.Tech(CS)" name="currentQualification" id="currentQualification">
                </div>

                <div class="container_input">
                    <b>Date Of Registration</b><br>
                    <input type="date" placeholder="DD/MM/YYYY" name="dateOfResgistration" id="dateOfResgistration">
                </div>

                <div class="container_input">
                    <b>College Name</b><br>
                    <input type="text" placeholder="IIT/NIT etc." name="collegeName" id="collegeName">
                </div>

                <div class="container_input">
                    <b>Project Title</b>(If you have worked on any Project)<br>
                    <input type="text" placeholder="Enter text" name="projectTitle" id="projectTitle">
                </div>

                <div class="container_input">
                    <b>Project Technology</b>(You want to grown up your Career)<br>
                    <select name= "projectTechnology" class="container_input" style="width: 100%" id="projectTechnology">
                        <option value="Select Technology">Select Technology</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                        <option value="h">H</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Project Description</b><br>
                    <input type="text" placeholder="Enter text" name="ProjectDescription" id="ProjectDescription">
                </div>

                <div class="container_input">
                    <b>Organization Name</b>(Where you have completed your Project)<br>
                    <input type="text" placeholder="Enter text" name="organisationName" id="organisationName">
                </div>

                <div class="container_input">
                    <b>Resume Upload</b><br>
                    <button type="submit" class="container_input" style="width: max-content; background-color: lightblue;" id="resumeUpload" name="resumeUpload">Choose File</button>
                    No choosen file.
                </div>

            </div>

        </div>

        <div class= "container3">

            <table style="width:100%">

                <tr>
                    <th>Qualification</th>
                    <th>Course Stream</th>
                    <th>School/College</th>
                    <th>Board/University</th>
                    <th>Passed/Passing Year</th>
                    <th>Marks in(%)</th>
                </tr>

                <tr>

                    <td>10th</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>

                    <td>12th</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>

                    <td>graduation</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1972'>1972</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>
                    <td>post graduation</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>
                    <td>certificate</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>
                </tr>

            </table>

        </div>

        <div class="container4">

            <div class="container_input">
                <button type="submit" name="add" class="container_input" style="width: max-content; background-color: lightblue;" >submit</button>    
            </div>
        </div>
    </form>
</div>


            <?php
        }else{
            ?>

<?php echo form_open('main/register'); ?>

<div>

    <div class="container1">
        <h1 style="text-align: center;"><strong>Registration Form</strong> </h1>
    </div>

        <div class="container2 ">

            <div class="container1left">

                <div>
                    <b>Candidate Name</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="cName" id="cName" >
                    <span class="error"><?php echo form_error('cName'); ?></span>
                    
                </div>

                <div >
                    <b>Father Name</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="fname" id="fname" >
                    <span class="error"><?php echo form_error('fname'); ?></span>
                    
                </div>

                <div>
                    <b>Mother Name</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="mname" id="mname" >
                    <span class="error"><?php echo form_error('mname'); ?></span>
                    
                </div>

                <div>

                    <b>Select Date of Birth</b><br>
                    <select name="day" class="container_input" id="day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select name="month" class = "container_input" id="month">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>

                    <select name='Year' class = "container_input" id="year">
                        <option value='1983'>1983</option>
                        <option value='1984'>1984</option>
                        <option value='1985'>1985</option>
                        <option value='1986'>1986</option>
                        <option value='1987'>1987</option>
                        <option value='1988'>1988</option>
                        <option value='1989'>1989</option>
                        <option value='1990'>1990</option>
                        <option value='1991'>1991</option>
                        <option value='1992'>1992</option>
                        <option value='1993'>1993</option>
                        <option value='1994'>1994</option>
                        <option value='1995'>1995</option>
                        <option value='1996'>1996</option>
                        <option value='1997'>1997</option>
                        <option value='1998'>1998</option>
                        <option value='1999'>1999</option>
                        <option value='2000'>2000</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Select Gender</b><br>
                    <select name="gender" class = "container_input" style="width: 100%;" id="gender">
                        <option value="Select Gender">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Marrital Status</b><br>
                    <select name="marital_status" class = "container_input" style="width: 100%;" id="maritalStatus"><br>
                        <option value="Select status">Select status</option>
                        <option value="Married">Married</option>
                        <option value="Unmarried">Unmarried</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Select Technology</b>(You want to grown up your Career)<br>
                    <select name="technology" class="container_input" style="width: 100%" id="selectTech">
                        <option value="Select Technology">Select Technology</option><br>
                        <option value="1">T1</option>
                        <option value="2">T2</option>
                        <option value="3">T3</option>
                        <option value="4">T4</option>
                        <option value="5">T5</option>
                        <option value="6">T6</option>
                        <option value="7">T7</option>
                        <option value="8">T8</option>
                        <option value="9">T9</option>
                        <option value="10">T10</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Catagory</b><br>
                    <select name="catagory" class="container_input" style="width: 100%" id="Category">
                        <option value="Select Category">Select Category</option>
                        <option value="1">C1</option>
                        <option value="2">C2</option>
                        <option value="3">C3</option>
                        <option value="4">C4</option>
                        <option value="5">C5</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Address</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="address" id="address" >
                    <span class="error"><?php echo form_error('address'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>District</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="district" id="district" >
                    <span class="error"><?php echo form_error('district'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>Zip/Pin</b><span class="error">* </span><br>
                    <input type="text" placeholder="Enter Text" name="pin" id="zip" >
                    <span class="error"><?php echo form_error('pin'); ?></span>
                    
                </div>

                <div class="container_input">
                    <b>Area of Interest</b><br>
                    <input type="text" placeholder="Enter Text" name="areaOfIntrest" id=areaOfIntrest>
                </div>

                <div class="container_input">
                    <b>Photo Upload</b><br>
                    <button type="submit" class="container_input" style="width: max-content; background-color: lightblue;" id ="phtoUpload">Choose File</button>
                    No choosen file.    
                </div>

            </div>

            <div class="container1right">

                <div class="container_input">
                    <b>Mobile Number</b><span class="error">* </span><br>
                    <input type="number" placeholder="Enter text" name="mobileNo" id="mobileNo">
                    <span class="error"><?php echo form_error('mobileNo'); ?></span>
                </div>

                 <div class="container_input">
                    <b>Phone Number</b><br>
                    <input type="number" placeholder="Enter text" name="phoneNumber" id="phoneNumber">
                </div>

                <div class="container_input">
                    <b>Email Id</b><span class="error">* </span><br>
                    <input type="email" placeholder="Enter email"  name="emailId" id="emailId">
                    <span class="error"><?php echo form_error('emailId'); ?></span>
                </div>

                <div class="container_input">
                    <b>Father's Occupation</b><br>
                    <input type="text" placeholder="Enter text" name="fatherOccupation" id="fatherOccupation">
                </div>

                <div class="container_input">
                    <b>Current Qualification with Branch</b>(If Pursuing mention Semester)<br>
                    <input type="text" placeholder="B.Tech(CS)" name="currentQualification" id="currentQualification">
                </div>

                <div class="container_input">
                    <b>Date Of Registration</b><br>
                    <input type="date" placeholder="DD/MM/YYYY" name="dateOfResgistration" id="dateOfResgistration">
                </div>

                <div class="container_input">
                    <b>College Name</b><br>
                    <input type="text" placeholder="IIT/NIT etc." name="collegeName" id="collegeName">
                </div>

                <div class="container_input">
                    <b>Project Title</b>(If you have worked on any Project)<br>
                    <input type="text" placeholder="Enter text" name="projectTitle" id="projectTitle">
                </div>

                <div class="container_input">
                    <b>Project Technology</b>(You want to grown up your Career)<br>
                    <select name= "projectTechnology" class="container_input" style="width: 100%" id="projectTechnology">
                        <option value="Select Technology">Select Technology</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                        <option value="h">H</option>
                    </select>
                </div>

                <div class="container_input">
                    <b>Project Description</b><br>
                    <input type="text" placeholder="Enter text" name="ProjectDescription" id="ProjectDescription">
                </div>

                <div class="container_input">
                    <b>Organization Name</b>(Where you have completed your Project)<br>
                    <input type="text" placeholder="Enter text" name="organisationName" id="organisationName">
                </div>

                <div class="container_input">
                    <b>Resume Upload</b><br>
                    <button type="submit" class="container_input" style="width: max-content; background-color: lightblue;" id="resumeUpload" name="resumeUpload">Choose File</button>
                    No choosen file.
                </div>

            </div>

        </div>

        <div class= "container3">

            <table style="width:100%">

                <tr>
                    <th>Qualification</th>
                    <th>Course Stream</th>
                    <th>School/College</th>
                    <th>Board/University</th>
                    <th>Passed/Passing Year</th>
                    <th>Marks in(%)</th>
                </tr>

                <tr>

                    <td>10th</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>

                    <td>12th</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>

                    <td>graduation</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1972'>1972</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>
                    <td>post graduation</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>

                        </select>
                    </td>

                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>

                </tr>

                <tr>
                    <td>certificate</td>
                    <td style="text-align: center;">-</td>
                    <td><input type="text" placeholder="School/College" name="clg"></td>
                    <td><input type="text" placeholder="Board/University" name="clg"></td>
                    <td>
                        <select name='Year' class="container_input" style="width: 100%;">
                            <option value='Year'>Year</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="%" name="clg" style="width: 100%;"></td>
                </tr>

            </table>

        </div>

        <div class="container4">

            <div class="container_input">
                <button type="submit" name="add" class="container_input" style="width: max-content; background-color: lightblue;" >submit</button>    
            </div>
        </div>
    </form>
</div>


            <?php
        }
        ?>
        

        
    </body>
</html>