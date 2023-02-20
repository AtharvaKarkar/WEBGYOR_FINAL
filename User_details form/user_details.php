<?php
session_start();
?>

<link rel="stylesheet" href="../User_details form/user_details.css">
<div class="mx-auto container">

    <!-- Progress Form -->
    <form id="progress-form" class="p-4 progress-form" action="https://httpbin.org/post" lang="en" novalidate>
  
      <!-- Step Navigation -->
      <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
        <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
          <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
          Your Details
        </button>
        <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
          <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
          About your website
        </button>
        <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
          <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
          Agree
        </button>
      </div>
      <!-- / End Step Navigation -->
  
      <!-- Step 1 -->
      <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
        <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
          <div class="mt-3 sm:mt-0 form__field">
            <label for="first-name">
              First name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="first-name" type="text" name="first-name" autocomplete="given-name" required>
          </div>
  
          <div class="mt-3 sm:mt-0 form__field">
            <label for="last-name">
              Last name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="last-name" type="text" name="last-name" autocomplete="last-name" required>
          </div>

          <div class="mt-3 sm:mt-0 form__field">
            <label for="last-name">
              Company name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="company-name" type="text" name="company-name" autocomplete="company-name" required>
          </div>
          </div>
        
  
        <div class="mt-3 form__field">
          <label for="email-address">
             Personal Email address
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="personalemail-address" type="email" name="personalemail-address" autocomplete="personalemail" inputmode="personalemail" required>
        </div>

        <div class="mt-3 form__field">
            <label for="email-address">
             Company Email address
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="companyemail-address" type="email" name="companyemail-address" autocomplete="companyemail" inputmode="companyemail" required>
        </div>
  
        <div class="mt-1 form__field">
          <label class="form__choice-wrapper">
            <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
            <span>Yes, I would like to sign up to receive the newsletter</span>
          </label>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
            <label for="address-state">
              Type of your website
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select id="type" name="type" autocomplete="shipping address-level1" required>
              <option value="" disabled selected>Please select</option>
              <option value="E">E-commerce</option>
              <option value="B">Business</option>
              <option value="Ed">Education</option>
              <option value="Tr">Travel</option>
              <option value="We">Wedding & Event Management</option>
              <option value="Ar">Agriculture</option>
              <option value="Ot">Other</option>
            </select>
          </div>

          <div class="mt-3 form__field">
            <label for="phone-number">
              Specify (optional)
            </label>
            <input id="specify" type="spe" name="spe" autocomplete="spe" inputmode="spe">
          </div>
  
  
        <div class="mt-3 form__field">
          <label for="phone-number">
            Phone number (optional)
          </label>
          <input id="phone-number" type="tel" name="phone-number" autocomplete="tel" inputmode="tel">
        </div>
  
        <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
          <button type="button" data-action="next" >
            Continue
          </button>
        </div>
      </section>
      <!-- / End Step 1 -->
  
      <!-- Step 2 -->
      <section id="progress-form__panel-2" role="tabpane2" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
        <div class="mt-3 form__field">
          <label for="companyaddress">
            Company Address
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="companyaddress" type="text" name="companyaddress" autocomplete="companyaddress-line1" required>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
            <label for="postalcode">
              Postal code
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="address-zip" type="text" name="address-zip" autocomplete="shipping postal-code" inputmode="numeric" required>
          </div>
        
  
        <div class="mt-3 form__field">
          <label for="about">
            About your business (optional)
          </label>
          <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
        </div>

        <div class="mt-3 form__field">
            <label for="existing">
              Do you have an existing website/app? (optional)
            </label>
            <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
        </div>
  
        <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
          <div class="mt-3 sm:mt-0 form__field">
            <label for="address-city">
              Convinient time to contact you
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="time" type="text" name="time" autocomplete="time" required>
          </div>
  
          <div class="mt-3 sm:mt-0 form__field">
            <label for="address-state">
              
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
              <option value="" disabled selected>Please select</option>
              <option value="MR">9am to 11am</option>
              <option value="AF">1pm to 3pm</option>
              <option value="EV">4pm to 6pm</option>
              <option value="NI">After 8pm</option>
            </select>
          </div>

          <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
            <div class="mt-3 sm:mt-0 form__field">
              <label for="address-city">
                Package you are interested in.
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="address-city" type="text" name="address-city" autocomplete="shipping address-level2" required>
            </div>
    
            <div class="mt-3 sm:mt-0 form__field">
              <label for="address-state">
                
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
                <option value="" disabled selected>Please select</option>
                <option value="MR">999</option>
                <option value="AF">4999</option>
                <option value="EV">7999</option>
                <option value="NI">8999</option>
              </select>
            </div>
  
          
  
        <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
          <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
            Back
          </button>
          <button type="button" data-action="next">
            Continue
          </button>
        </div>
      </section>
      <!-- / End Step 2 -->
  
      <!-- Step 3 -->
      <!--section id="progress-form__panel-3" role="tabpane3" aria-labelledby="progress-form__tab-3" tabindex="0">
      <div class="mt-3 sm:mt-0 form__field">
        <label for="agree">
          Do you agree with our privacy policy?
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <select id="agree" name="agree" autocomplete="agree" required>
          <option value="" disabled selected>Please select</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
          
        </select>
        </div>
        <button type="submit" value="submit">
            Submit
          </button>
          </section>
        
      
      <!-- / End Step 3 -->
  
      <!-- Thank You -->
      <section id="progress-form__thank-you" hidden>
        <p>Thank you for your submission!</p>
        <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
      </section>
      <!-- / End Thank You -->
  
    </form>
    <!-- / End Progress Form -->
  
  </div>