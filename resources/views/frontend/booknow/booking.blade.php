@extends('frontend.master')

@section ('title', 'Home')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-400" style="margin-bottom:60px;margin-top:30px;">
    <div class="container p-4 bg-light shadow-lg rounded" style="max-width: 1000px;">

    <div class="p-4 mb-4 rounded shadow" style="background-color: #e9f6f9; color: black;">
    <!-- Tour Name -->
    <h3 class="mb-3 text-center">{{ $packages->name }}</h3>
    
    <!-- Horizontal Line -->
    <hr class="mb-4 border-dark">

    <div class="row">
        <!-- Labels Column -->
        <div class="col-md-4 d-flex flex-column fw-bold">
            <p>Destination:</p>
            <p>Description:</p>
            <p>Price:</p>
            <p>Duration:</p>
        </div>

        <!-- Values Column -->
        <div class="col-md-8 d-flex flex-column" style="color: grey !important;">
    <p style="color: inherit !important;"></p>
    <p style="color: inherit !important;"></p>
    <p style="color: inherit !important;"></p>
    <p style="color: inherit !important;"> Days</p>
</div>


    </div>
</div>






        <!-- Traveler Type Selection -->
        <div class="mb-3">
            <label class="form-label">Types of traveller</label>
            <div>
                <input type="radio" name="travelerType" value="adult" id="adult" class="form-check-input" checked>
                <label for="adult" class="form-check-label">Solo Traveller</label>
            </div>
            <div>
                <input type="radio" name="travelerType" value="child" id="child" class="form-check-input">
                <label for="child" class="form-check-label">Couple</label>
            </div>
            <div>
                <input type="radio" name="travelerType" value="family" id="family" class="form-check-input" checked>
                <label for="family" class="form-check-label">Family</label>
            </div>
            <div>
                <input type="radio" name="travelerType" value="friends" id="friends" class="form-check-input">
                <label for="friends" class="form-check-label">Group of Friends</label>
            </div>
        </div>



              <!-- List of Added Travelers -->
<!-- List of Added Travelers -->
<h6 class="mt-3 text-center">Traveller Details</h6>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-secondary">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="travelerList">
            <!-- Travelers will be dynamically added here -->
        </tbody>
    </table>
</div>

  <!-- Add Traveler Button -->
<button id="addTravelerBtn" class="btn btn-primary  w-20 mb-3">Add Traveller</button>

<!-- Traveler Form Section (Initially Hidden) -->
<div id="travelerForm" class="mb-3 p-3 border rounded bg-white position-relative" style="display: none; max-width: 1000px;">
  

    <h6>Identity Information</h6>

    <div class="row g-2">
        <!-- Personal Information -->
        <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" id="firstName" class="form-control form-control-sm" placeholder="First Name">
        </div>

        <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" id="lastName" class="form-control form-control-sm" placeholder="Last Name">
        </div>

        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" id="email" class="form-control form-control-sm" placeholder="Email">
        </div>

        <div class="col-md-6">
            <label class="form-label">Age</label>
            <input type="number" id="travelerAge" class="form-control form-control-sm" placeholder="Age">
        </div>

        <div class="col-md-6">
            <label class="form-label">Date of Birth</label>
            <input type="date" id="dob" class="form-control form-control-sm">
        </div>

        <div class="col-md-6">
            <label class="form-label">Gender</label>
            <select id="gender" class="form-control form-control-sm">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">WhatsApp Number</label>
            <input type="text" id="whatsappNumber" class="form-control form-control-sm" placeholder="WhatsApp Number">
        </div>
    </div>

    <!-- Food & Medical Information Section -->
    <h6 class="mt-3">Food & Medical Information</h6>
    <div class="row g-2">
        <div class="col-md-6">
            <label class="form-label">Food Allergies</label>
            <input type="text" id="foodAllergies" class="form-control form-control-sm" placeholder="Food Allergies">
        </div>

        <div class="col-md-6">
            <label class="form-label">Dietary Restrictions</label>
            <select id="dietaryRestrictions" class="form-control form-control-sm">
                <option value="Vegan">Vegan</option>
                <option value="Vegetarian">Vegetarian</option>
                <option value="Pescatarian">Pescatarian</option>
                <option value="Gluten Free">Gluten Free</option>
                <option value="Dairy Free">Dairy Free</option>
                <option value="N/A">N/A</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Medical Condition</label>
            <input type="text" id="medicalCondition" class="form-control form-control-sm" placeholder="Medical Condition">
        </div>
    </div>

    <button id="saveTravelerBtn" class="btn btn-success btn-sm mt-3">Save Traveller</button>
</div>







    </div>
</div>
<div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="30%" data-right="9%">
    <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
</div>
<div class="shape-mockup shape2 d-none d-xl-block" data-bottom="8%" data-right="8%">
    <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
</div>
<div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="15%" data-right="4%">
    <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
</div>

<!-- jQuery and Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        // Show form when clicking "Add Traveler"
        $('#addTravelerBtn').click(function () {
            $('#travelerForm').slideDown();
        });

        // Save traveler details and display in table
        $('#saveTravelerBtn').click(function () {
            let firstName = $('#firstName').val();
            let lastName = $('#lastName').val();
            let email = $('#email').val();
            let age = $('#travelerAge').val();
            let dob = $('#dob').val();
            let gender = $('#gender').val();
            let whatsappNumber = $('#whatsappNumber').val();
            let foodAllergies = $('#foodAllergies').val();
            let dietaryRestrictions = $('#dietaryRestrictions').val();
            let medicalCondition = $('#medicalCondition').val();

            if (firstName && lastName && email && age && dob && gender) {
                let row = `
                    <tr>
                        <td>${firstName} ${lastName}</td>
                        <td>${email}</td>
                        
                        <td>
                            <button class="btn btn-danger btn-sm deleteBtn">Delete</button>
                        </td>
                    </tr>
                `;
                $('#travelerList').append(row);

                // Clear form fields and hide form
                $('#firstName, #lastName, #email, #travelerAge, #dob, #gender, #whatsappNumber, #foodAllergies, #dietaryRestrictions, #medicalCondition').val('');
                $('#travelerForm').slideUp();
            } else {
                alert('Please enter all required traveler details!');
            }
        });

        // Delete traveler row
        $(document).on('click', '.deleteBtn', function () {
            $(this).closest('tr').remove();
        });


    });
</script>

@endsection
