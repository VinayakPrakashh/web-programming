<html>
  <head>
    <h1 style="text-align: center">Client side validation</h1>
  </head>
 
  <script>
    function tterms() {
      let t = myform.terms.checked;

      if (!t) {
        alert("accept the terms  and conditions to continue");
        myform.terms.focus();
        return false;
      } else return true;
    }
    function pass() {
      let x = document.myform.password.value;
      let y = document.myform.password2.value;
      if (x == "") {
        alert("Enter password");

        return false;
      } else if (x != y) {
        alert("The password are not matching");

        return false;
      } else if (/^[A-Za-z]\w{7,14}$/.test(x) && /^[A-Za-z]\w{7,14}$/.test(y)) {
        return tterms();
      } else {
        alert(
          "password not valid"
        );
        return false;
      }
    }
    function phemail() {
      let x = document.myform.number.value;
      let y = document.myform.mail.value;

      if (x == "") {
        alert("Enter your phone number");
        return false;
      } else if (y == "") {
        alert("Enter your email id");
        return false;
      } else {
        return pass();
      }
    }
    function Gender() {
      if (
        myform.gender[0].checked == false &&
        myform.gender[1].checked == false
      ) {
        alert("Please choose your Gender: Male or Female");
        return false;
      } else {
        return phemail();
      }
    }
    function names() {
      let x = document.myform.fname.value;
      let y = document.myform.lname.value;

      if (x == "" || y == "") {
        alert("name must be filled");
        return false;
      }
      if (/^[A-Za-z ]+$/.test(x) && /^[A-Za-z ]+$/.test(y)) {
        return Gender();
      } else {
        alert("enter valid name");
        return false;
      }
    }
  </script>
  <body>
    <form
      name="myform"
      action="grade2.html"
      onsubmit="return names()"
      method="post"
    >
      <table style="height: 90%" align="center">
        <tr>
          <td>First Name:</td>
          <td>
            <input type="text" name="fname" id="fname" onchange="name()" />
          </td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td>
            <input type="text" name="lname" id="lname" onchange="name()" />
          </td>
        </tr>
        <tr>
          <td>Date of Birth:</td>
          <td>
            <input type="date" name="date" id="date" onchange="getage()" />
          </td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <input type="radio" name="gender" value="gender" />Male
            <input type="radio" name="gender" value="gender" />Female
          </td>
        </tr>
        <tr>
          <td>Phone No:</td>
          <td><input type="tel" name="number" id="number" /></td>
        </tr>
        <tr>
          <td>Email id:</td>
          <td><input type="email" name="mail" id="mail" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" /></td>
        </tr>
        <tr>
          <td>Retype password:</td>
          <td><input type="password" name="password2" /></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="checkbox" name="terms" /> I agree to the terms and
            conditions
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="SubmitButton" value="submit" /></td>
          <td><input type="reset" value="Reset" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
