<?php
session_start()
?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    
</head>
<body> 

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Company Details</li>
                <li>Facilities</li>
                <li>Address Details</li>
                <li>Submit</li>
                
            </ul>
            <!-- fieldsets -->


<!-- Personal details -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you ..</h3>

                <table cellspacing="10" width="100%">
                        <tr>
                            <td><input type="text" name="fname" placeholder="First Name" /> </td>
                            <td><input type="text" name="lname" placeholder="Last Name"/></td>
                        </tr>
                </table>
                
<!--Personal email id -->
                <h5 align="left" >Personal Email ID</h5>
                <input type="text" name="pemailid" placeholder="Personal Email id"/>
<!--Personal contact number -->
                <h5 align="left" >Personal contact number</h5>
                <input type="text" name="pcontact" placeholder="Personal contact"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            
<!-- Academic details -->
            <fieldset>
                <h2 class="fs-title">Company/Business details</h2>
                <h3 class="fs-subtitle">Tell us something more about your business..</h3>
<!-- Company's Details -->
                <h5 align="left" >Company Name</h5>
                <input type="text" name="companyName" placeholder="Company's Name"/>
                
<!-- Email id -->
                <h5 align="left" >Company Email ID</h5>
                <input type="text" name="Emailid" placeholder="Email id"/>
<!-- Know business -->
                <h5 align="left" >Explain about your business</h5>
                <input type="text" name="Explain" placeholder="Explain"/>
<!--Website category -->
                       <table>
                           <th><h5 align="left" >Type of website: </h5></th>
                           <tr>
                               <td>
                                 <select style="font-size: 15px;" >
                                     <option>Event management</option><option>E-commerce</option><option>Business</option>
                                     <option>Education</option><option>Travel</option><option>Agriculture</option>
                                </select>                                                   
                               </td>
                           </tr>                   
                       </table><br>
                       
            <!--Website category -->
                        <table>
                            <th><h5 align="right" >Are you having users outside India?</h5> </h5></th>
                            <tr>
                               <td>
                                 <select style="font-size: 15px;" >
                                   <option>Yes</option><option>No</option>
                                 </select>                                                   
                                </td>
                            </tr>                   
                        </table><br>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>               
<!-- Experiance details -->
            <fieldset>
                <h2 class="fs-title">Facility</h2>
                <h3 class="fs-subtitle">Explore about Us</h3>
                <table cellpadding="10px" >
                    <!--Facility category -->
                    <table>
                        <th><h5 align="left" >Type of package : </h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" >
                                  <option>₹2999</option><option>₹6999</option><option>₹8999</option>
                                  <option>₹14999</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br>
<!--Choose the facility -->
                <table>
                        <th><h5 align="left" >Choose any particular facility: </h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" >
                                  <option>DESIGN</option><option>WEB DEVELOPMENT</option><option>SEARCH ENGINE OPTIMIZATION</option>
                                  <option>PHOTOGRAPHY</option><option>APP DEVELOPMENT</option><option>DIGITAL MARKETING</option><option>BRANDING</option>
                                  <option>SOCIAL MEDIA MANAGEMENT</option><option>NONE</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br>   
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>

<!-- Contacts details -->
            <fieldset>
                <h2 class="fs-title">Address Details</h2>
                <h3 class="fs-subtitle">Address information</h3>
                <table>
                    <tr>
                        <td colspan="3"><input type="text" name="add1" placeholder="Permanent Address" ></td> 
                    </tr>
                    <tr>
                        <td><input type="text" name="add1" placeholder="Permanent Address" ></td>
                        <td><input type="text" name="state" placeholder="State" ></td>
                        <td><input type="text" name="pincode" placeholder="Pincode" ></td>
                    </tr><br>
                </table>
                
                    <table>
                        <th><h5 align="left" >Any color preferences? </h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" >
                                  <option>DARK AND POP</option><option>BRIGHT AND COLORFUL</option><option>SUBTLE AND SIMPLE</option>
                                  <option>OTHER</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br> 
                    
                    <table>
                        <th><h5 align="left" >Convinient time to contact you?</h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" >
                                  <option>9AM TO 11AM</option><option>1PM TO 4PM</option><option>5PM TO 8PM</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br>
                    <h5 align="left" >Do you have any more feedback,If yes please share</h5>
                    <input type="text" name="feedback" placeholder="feedback"/> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>    


<!-- Submit -->
            <fieldset>
                <h2 class="fs-title">Sumbit</h2>
                <h3 class="fs-subtitle">Best of Luck</h3>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="user.js" ></script>
</body>
</html>
