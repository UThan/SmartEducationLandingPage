<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../include/mata.php');
  ?>
</head>

<body>

  <div class="container">
    <div class="form">
      <h2 class="title">Student Information Request Form</h2>
      <form id="studentinfo" method="POST">
        <div class="form-row">
          <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
          </div>
          <div class="col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6">
            <label for="phone">Phone no</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone no" required>
          </div>
          <div class="col-md-6">
            <label for="courses">Courses</label>
            <select class="form-control" id="courses" name="courses" required>
              <option value="" disabled selected>Select courses</option>
              <option value="none">None</option>
              <option value="IT">IT</option>
              <option value="Business">Business</option>
              <option value="Project Management">Project Management</option>
              <option value="Leadership Management">Leadership Management</option>
            </select>
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-6">
            <label for="institute">Institute</label>
            <select class="form-control" id="institute" name="institute" required>
              <option value="" disabled selected>Choose institute</option>
              <option value="None">None</option>
              <option value="ACBI">ACBI</option>
              <option value="ATMC">ATMC</option>
              <option value="Strathfield">Strathfield Collage</option>
              <option value="AA Poly">AA Poly</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="city">Targeted city</label>
            <select class="form-control" id="city" name="targeted_city" required>
              <option value="" disabled selected>Targeted city</option>
              <option value="None">None</option>
              <option value="Melbourne">Melbourne</option>
              <option value="Sydney">Sydney</option>
              <option value="Perth">Perth</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6">
            <label for="visa_status">Visa Status</label>
            <select class="form-control" id="visa_status" name="visa_status" required>
              <option value="" disabled selected>Visa status</option>
              <option value="not started">Not started</option>
              <option value="process start">Process Start</option>
              <option value="pending">Pending</option>
              <option value="completed">Completed</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="app_status">Application Status</label>
            <select class="form-control" id="app_status" name="app_status" required>
              <option value="" disabled selected>Application status</option>
              <option value="not started">Not started</option>
              <option value="process start">Process Start</option>
              <option value="pending">Pending</option>
              <option value="completed">Completed</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="address">Address</label>
            <textarea rows="2" class="form-control" name="address" id="address" required></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-3">
            Offer Received
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="offer_received" id="off1" value="true" required>
              <label class="form-check-label" for="off1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="offer_received" id="off2" value="false">
              <label class="form-check-label" for="off2">No</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-3">
            COE Received
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="coe_received" id="coe1" value="true" required>
              <label class="form-check-label" for="coe1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="coe_received" id="coe2" value="false">
              <label class="form-check-label" for="coe2">No</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-3">
            Deposit Paid
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="deposit_paid" id="dep1" value="true" required>
              <label class="form-check-label" for="dep1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="deposit_paid" id="dep2" value="false">
              <label class="form-check-label" for="dep2">No</label>
            </div>
          </div>
        </div>


        <div class="form-row form-dep">
          <div class="col-md-6">
            <label for="dep_amount">Deposited Amount</label>
            <input type="number" class="form-control" name="dep_amount" id="dep_amount" placeholder="Deposited Amount">
          </div>
          <div class="col-md-6">
            <label for="dep_currency">Currency</label>
            <select class="form-control" id="dep_currency" name="dep_currency">
              <option value="" disabled selected>Currency</option>
              <option value="MMK">MMK(Ks)</option>
              <option value="USD">USD($)</option>
              <option value="AUD">AUD(AU$)</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-3">
            Tution Fees Paid
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tutionfees_paid" id="tut1" value="true" required>
              <label class="form-check-label" for="tut1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tutionfees_paid" id="tut2" value="false">
              <label class="form-check-label" for="tut2">No</label>
            </div>
          </div>
        </div>

        <div class="form-row form-tut">
          <div class="col-md-6">
            <label for="tut_amount">Tution Fees Amount</label>
            <input type="number" class="form-control" name="tut_amount" id="tut_amount" placeholder="Tution Fees Amount">
          </div>
          <div class="col-md-6">
            <label for="tut_currency">Currency</label>
            <select class="form-control" id="tut_currency" name="tut_currency">
              <option value="" disabled selected>Currency</option>
              <option value="MMK">MMK(Ks)</option>
              <option value="USD">USD($)</option>
              <option value="AUD">AUD(AU$)</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <button type="submit" class="btn btn-danger">Submit</button>
          <a href='' class="btn btn-secondary" id="btn-reset">Reset</a>
          <a href='../pages/studentlist.php' class="btn btn-success">Go to List</a>
        </div>
      </form>
    </div>
  </div>

  <?php
  include('../include/footer.php');
  ?>
  <script>
    document.querySelector('#studentinfo').addEventListener('submit', e => {
      e.preventDefault();
      submit();
    })

    document.querySelector('#studentinfo').addEventListener('click', e => {
      if (e.target.name === 'deposit_paid') {
        if (e.target.value === 'true') {
          document.querySelector(".form-dep").style.display = 'flex';
          document.querySelector("input[name='dep_amount']").setAttribute('required', '');
          document.querySelector("select[name='dep_currency']").setAttribute('required', '');
        } else {
          document.querySelector(".form-dep").style.display = 'none';
          document.querySelector("input[name='dep_amount']").removeAttribute('required');
          document.querySelector("select[name='dep_currency']").removeAttribute('required');
        }
      };

      if (e.target.name === 'tutionfees_paid') {
        if (e.target.value === 'true') {
          document.querySelector('.form-tut').style.display = 'flex';
          document.querySelector("input[name='tut_amount']").setAttribute('required', '');
          document.querySelector("select[name='tut_currency']").setAttribute('required', '');
        } else {
          document.querySelector('.form-tut').style.display = 'none';
          document.querySelector("input[name='tut_amount']").removeAttribute('required');
          document.querySelector("select[name='tut_currency']").removeAttribute('required');
        };
      };
    })

    const submit = function() {
      const checkInputs = ['deposit_paid', 'offer_received', 'coe_received', 'tutionfees_paid'];
      const inputs = ['name', 'email', 'phone', 'courses', 'institute', 'targeted_city', 'visa_status', 'app_status', 'address', 'dep_amount', 'dep_currency', 'tut_amount', 'tut_currency'];

      const form = {};

      inputs.forEach(i => {
        const input = document.getElementsByName(i);
        form[i] = input[0].value;
      });

      checkInputs.forEach(i => {
        const input = $(`input[name=${i}]:checked`).val();
        form[i] = input;
      })

      $.ajax({
        url: 'addstudentinfo.php',
        method: 'POST',
        dataType: 'json',
        data: form,
        success: function(response) {

          $('#studentinfo')[0].reset();
          Toast.fire({
            icon: 'success',
            title: 'Form submit successfully'
          })
        },
        error: function(response) {
          Toast.fire({
            icon: 'error',
            title: 'Error submitting form'
          })
        }
      });
    }
  </script>

</body>

</html>