<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Booking form</title>
    
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("../img/8.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;

      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
}

      input[type=number] {
        -moz-appearance: textfield;
      }

    </style>
  </head>
  <body>
    <div class="testbox">
    <form action="/pay2">
      <div class="banner">
        <h1>House booking form</h1>
      </div>
      <br/>
      <fieldset>
        <legend>House booking form</legend>
        <div class="columns">
        

        
          <div class="item">
            <label for="fname">Full Name<span>*</span></label>
            <input id="fname" type="text" name="U_name" / required>
          </div>
          <div class="item">
            <label for="lname"> House number<span>*</span></label>
            <input id="lname" type="number" name="lname" / required>
          </div>
          
                    <div class="item">
            <label for="fname">House booking id<span>*</span></label>
            <input id="fname" type="number" name="fname" / required>
          </div>
          
                    <div class="item">
            <label for="fname">User id<span>*</span></label>
            <input id="fname" type="number" name="fname" / required>
          </div>
          
          <div class="item">
            <label for="address">Address<span>*</span></label>
            <input id="address" type="text"   name="address" / required>
          </div>

          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" / required>
          </div>
          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" / required>
          </div>
          <div class="item">
            <label for="eaddress">Email<span>*</span></label>
            <input id="eaddress" type="email"   name="eaddress" / required>
          </div>
 
      
                <div class="item">
            <label for="eaddress">House Document<span>*</span></label>
            <input id="eaddress" type="file"   name="eaddress" / required>
          </div>
          
                <div class="item">
            <label for="eaddress">Bookong date<span>*</span></label>
            <input id="eaddress" type="date"   name="eaddress" / required>
          </div>
          
                              <div class="item">
            <label for="eaddress">User id Proof<span>*</span></label>
            <input id="eaddress" type="file"   name="eaddress" / required>
          </div>
          
      
      <div class="item">
            <label for="eaddress">Exit date<span>*</span></label>
            <input id="eaddress" type="date"   name="eaddress" / required>
          </div>
          
       <div class="item">
      <p>Select Gender</p>
      <select>
      <option value="8" disabled selected>Gender</option>
      <option value="9" >Male</option>
      <option value="10">Female</option>
      </select>
      </div> 
      
      
      </fieldset>
      <br/>

      <div class="btn-block">
      <button type="submit" href="/">Submit</button>
      </div>
    </form>
    </div>
  </body>
</html>