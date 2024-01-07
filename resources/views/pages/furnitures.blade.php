<x-app-layout>
    <section class="container-form">
        <header>Booking Form</header>
        <form action="#" class="form">
          <div class="input-box">
            <label class="headup">Full Name</label>
            <input type="text" placeholder="Enter full name" required />
          </div>
          <div class="input-box">
            <label class="headup">National Identity Card Number</label>
            <input type="text" placeholder="Enter National Identity Card Number" required />
          </div>
          <div class="column">
            <div class="input-box">
              <label class="headup">Phone Number</label>
              <input type="number" placeholder="Enter phone number" required />
            </div>
          </div>

          {{-- GENDER1 --}}
          <div class="gender-box">
            <h3 id="heady">Type</h3>
            <div class="gender-option">
              <div class="gender">
                <input type="radio" id="check-male" name="gender0" />
                <label for="check-male">Petrol</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-female" name="gender0" />
                <label for="check-female">Diesel</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-other" name="gender0" />
                <label for="check-other">Electric</label>
              </div>
            </div>
          </div>

           {{-- GENDER2 --}}
          <div class="gender-box">
           <h3 id="heady">Payment Type</h3>
           <div class="gender-option">
             <div class="gender">
               <input type="radio" id="check-male" name="gender3"/>
               <label for="check-male">Card</label>
               <br>
               <div class="input-box">
               <input type="text" placeholder="Enter card number" required/>
               </div>
               <div class="input-box">
               <input type="text" placeholder="Enter security number" required/>
              </div>
               <br>
             </div>
             <div class="gender">
              <br>
               <input type="radio" id="check-female" name="gender3" />
               <label for="check-female">Cash</label>
             </div>
           </div>
         </div>

          {{-- GENDER3 --}}
          <div class="gender-box">
           <h3 id="heady">Type of service needed:</h3>
           <div class="gender-option">
             <div class="gender">
               <input type="radio" id="check-male" name="gender5"/>
               <label for="check-male">Car wash</label>
             </div>
             <div class="gender">
               <input type="radio" id="check-female" name="gender6" />
               <label for="check-female">Battery change</label>
             </div>
             <div class="gender">
               <input type="radio" id="check-other" name="gender7" />
               <label for="check-other">Tyre change</label>
             </div>
             <div class="gender">
              <input type="radio" id="check-other" name="gender8" />
              <label for="check-other">Engine oil change</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender9" />
              <label for="check-other">Fuel Delivery</label>
            </div>
           </div>
         </div>

          <div class="input-box address">
            <label class="headup">Address and Additional Details</label>
            <input type="text" placeholder="Enter street address" required />
            <div class="column">
              <input type="text" placeholder="Enter your plate number" required />
            </div>
            <div class="column">
              <input type="text" placeholder="Enter your chasis number" required />
              <input type="number" placeholder="Enter discount code" />
            </div>
          </div>
          <button>Submit</button>
        </form>
      </section>
</x-app-layout>