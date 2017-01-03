<div class="box row row-centered">
    
    <a class="top_button col-2 col-m-4 col-centered" href="#popup1">Let's Get Started!</a>

    <a class="search top_button col-2 col-m-4 col-centered" href="http://rcre.com/property-search/">Search Properties</a>

</div> <!-- END OF "GET STARTED" -->


<div id="popup1" class="overlay">
    <div class="popup">
        <h4>Let's Get Started!</h4>
        <a class="close" href="#">&times;</a>
        <div class="popupContent">

            <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

            <input type=hidden name="oid" value="00D15000000NClj">
            <input type=hidden name="retURL" value="<?php echo ''.home_url().'/thank-you'?>">
           
            <h5>How can we help you?</h5>

            <input  id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name" required="required"/>
            <input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name" required="required"/>
            <br>
            <input  id="email" maxlength="80" name="email" size="20" type="email" placeholder="Email" required="required"/>
            <input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="Phone: (###) ###-####" required="required"/>
            <br>
            <input  id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company" required="required"/>
            <br>
            <label>Your Role:</label> &nbsp; 

            <select  id="00N1500000HgSot" name="00N1500000HgSot" title="What is your role?">
                <option value="Landlord">Landlord</option>
                <option value="Occupier">Occupier</option>
                <option value="Investor">Investor</option>
                <option value="Seller">Seller</option>
                <option value="Other">Other</option>
            </select>
            &nbsp; &nbsp; &nbsp;
            <br>
            <label> Topic of Interest: </label> &nbsp; 
            <select  id="00N1500000HfSlG" name="00N1500000HfSlG" title="Commercial Industry">
                <option value="General_Inquiry">General Inquiry</option>
                <option value="Office">Office</option>
                <option value="Industrial">Industrial</option>
                <option value="Retail">Retail</option>
                <option value="Capital Advisors">Capital Markets</option>
                <option value="Land">Land</option>
                <option value="Investments">Investments</option>
                <option value="Multifamily">Multifamily</option>
            </select>

            <input type=hidden name="lead_source" value="Web">

            <textarea name="description" placeholder="Tell us more about yourself! What is important to you? How can we we work together?" required></textarea><br>
            
            <!-- <div class="g-recaptcha" data-sitekey="6LdkhCITAAAAAA6ou81ss8pSON5BF78ZJO8bxeGa"></div> -->

            <button type="submit" name="submit" title="Submit!">Let's Work Together.</button>

            <h5 class="center">Rather work over the phone? Give us a call at 317.663.6000</h5>
            </form>

              
           
        </div>
    </div>
</div><!-- END of "popup1" -->





