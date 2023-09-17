@extends('frontend.layouts.master_popup')

@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center {
            margin: 0 10px;
            /* Adjust margin as needed */
        }
    </style>

    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="donate-form-area">
            <div class="section-title center">
                <h2> Quick Help Project Form</h2>
            </div>

            <form method="post" action="" <div class="form-bg">
                <div class="row clearfix">


                    <h2> Personal Information</h2>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Name</p>
                            <input type="text" class="form-control" required="" aria-required="true"
                                value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Your Email</p>
                            <input type="email" class="form-control required email" required="" aria-required="true"
                                value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Phone</p>
                            <input type="text" class="form-control" required="" value="{{ $user->phone }}"
                                name="phone" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p>Address*</p>
                            <input type="text" id="" name="address" class="form-control" placeholder=""
                                required="" value="{{ $user->address }}" readonly>
                        </div>
                    </div>


                </div>

            </form>
            <br><br>

            <form method="post" action="{{ url('/project/Quickstoreform') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-bg">
                    <div class="row clearfix">
                        <input type="hidden" class="form-check-input" name="category_id1" value="1" </div>
                        <input type="hidden" class="form-check-input" name="category_id2" value="2" </div>
                        <input type="hidden" class="form-check-input" name="category_id3" value=" " </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Image</p>
                                <input type="file" name="image" class="form-control" required>
                            </div>

                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Project Title </p>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Location</p>
                                <input type="text" name="location" class="form-control" placeholder="Enter the location"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="short_description">Short description</label>
                                <textarea id="short_description" name="short_description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="long_description">Full description</label>
                                <textarea id="long_description" name="long_description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="start_day">Start Day</label>
                                <input type="date" id="start_day" name="start_day" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="end_day">End Day</label>
                                <input type="date" id="end_day" name="end_day" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="volunteering_hours_start">Volunteering Hours Start</label>
                                <input type="time" id="volunteering_hours_start" name="volunteering_hours_start"
                                    class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="volunteering_hours_end">Volunteering Hours End</label>
                                <input type="time" id="volunteering_hours_end" name="volunteering_hours_end"
                                    class="form-control" required>
                            </div>

                        </div>

                        <div class="center">
                            <button class="thm-btn sbmt-btn" id="save_btn" type="submit">Save Project Information</button>
                        </div>

                    </div> <!-- End of row -->
                </div> <!-- End of form-bg -->
            </form>

        </div>
    </div>


    <br>
    <br>



    <div class="button-container" id="btn_box">
        <div class="center">
            <button class="thm-btn sbmt-btn Mony_Donationbtn" type="button" style="display: none">Money Help</button>
        </div>

        <div class="center">
            <button class="thm-btn sbmt-btn Service_Donationbtn" type="button" style="display: none">Service
                Help</button>
        </div>

        <div class="center">
            <button class="thm-btn sbmt-btn Item_Donationbtn" type="button" style="display: none">Item Help</button>
        </div>
    </div>





    {{-- ................................................ --}}


    {{-- **************Mony Donation Section****************** --}}
    <div class="container" id="Mony_Donation">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif



        <div class="donate-form-area">
            <div class="section-title center">
                <h2> Help Information</h2>
            </div>

            <h4>How much you need to help:</h4>

            <form action="{{ route('store.Quick.donation') }}" class="donate-form" method="post"
                novalidate="novalidate">
                @csrf
                <ul class="chicklet-list clearfix">

                    <div class="form-check form-check-inline">
                        <input type="hidden" class="form-check-input" name="category_id1" value="1" </div>


                        <li>
                            <input type="radio" id="donate_amount-1" name="budget" value="20" required>
                            <label for="donate_amount-1">20 JD</label>
                        </li>
                        <li>
                            <input type="radio" id="donate_amount-2" name="budget" value="50" required>
                            <label for="donate_amount-2">50 JD</label>
                        </li>
                        <li>
                            <input type="radio" id="donate_amount-3" name="budget" value="100" required>
                            <label for="donate_amount-3">100 JD</label>
                        </li>
                        <li>
                            <input type="radio" id="donate_amount-4" name="budget" value="200" required>
                            <label for="donate_amount-4">200 JD</label>
                        </li>
                        <li>
                            <input type="number" id="custom_amount" name="budget" placeholder="Enter the  amount"
                                required>
                        </li>

                </ul>


                <div class="center">

                    <button class="thm-btn sbmt-btn" type="submit"> Save</button>
                </div>
            </form>
        </div>


    </div>


    {{-- ................................................ --}}


    {{-- *************Service Donation Section************* --}}

    <div class="container" id="Service_Donation">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>



            <form action="{{ route('sorte.Quick.service') }}" class="donate-form" method="post"
                novalidate="novalidate">
                @csrf


                <ul class="payment-option">
                    <br>
                    <li>
                        <h4> Choose the Donation Service:</h4>
                    </li>

                </ul>

                <div class="form-check form-check-inline">
                    <input type="hidden" class="form-check-input" name="category_id3" value="3" </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="choosen_service1" value="Transportation"
                            required>
                        <label class="form-check-label">Transportation </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="choosen_service2" value="Planting"
                            required>
                        <label class="form-check-label"> Planting </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="choosen_service3" value="Organizing"
                            required>
                        <label class="form-check-label"> Organizing </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="number" class="form-check-input" name="volunteering_number" required>
                        <label class="form-check-label"> Volunteering Number </label>
                    </div>

                    <div class="center">



                        <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                    </div>
            </form>
        </div>
    </div>

    {{-- ...................................................... --}}


    {{-- *************Item Donation Section************* --}}
    <div class="container" id="Item_Donation">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <form class="default-form" action="{{ route('store.Quick.item') }}" method="post" novalidate="novalidate">
                @csrf


                <ul class="payment-option">

                    <h4>Choose Items for Donation:</h4>


                </ul>

                <div class="form-check form-check-inline">
                    <input type="hidden" class="form-check-input" name="category_id2" value="2" </div>


                    <div class="form-check form-check-inline">
                        <label class="form-check-label"> Tree :</label>
                        <input type="text" class="form-check-input" name="tree_type1"
                            placeholder="Enter the tree type" required><br>
                        <input type="number" class="form-check-input" name="tree_type_number1"
                            placeholder="Enter number of tree" required>
                    </div>

                    <div>
                        <label>
                            <input type="checkbox" class="form-check-input add_more_btn">
                            <span class="add-more-label">Add more</span>
                        </label>
                        <div class="form-check form-check-inline add_more_box">
                        </div>

                    </div>
                    <br>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">Fertilizer :</label>
                        <input type="text" class="form-check-input" name="fertilizer"
                            placeholder="Enter Fertilizer type" required><br>
                        <input type="number" class="form-check-input" name="fertilizer_Kg"
                            placeholder="Enter the amount of Fertilizer in(Kg)" required>
                    </div>
                    <br><br>

                    <div class="form-check form-check-inline add_more_eqbox">
                        <label class="form-check-label"> Equipments :</label>
                        <input type="text" name="equipments1" placeholder="Enter the Equipment">

                    </div>
                    <div>
                        <label>
                            <input type="checkbox" class="form-check-input add_more_btn_eq">
                            <span class="addMore_eqLabel">Add more</span>
                        </label>
                        <div class="form-check form-check-inline add_more_eqbox">
                        </div>

                    </div>



                    <div class="center">
                        <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                    </div>
            </form>
        </div>
    </div>

    {{-- ...................................................... --}}

    {{-- ***********************Money Donation***************** --}}

    <script>
        // Get references to the radio buttons and the custom amount input field
        const radioButtons = document.querySelectorAll('input[name="donate_amount"]');
        const customAmountInput = document.getElementById('custom_amount');

        // Add click event listeners to the radio buttons
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('click', () => {
                // Check if the custom amount radio button is selected
                if (radioButton.id === 'donate_amount-7') {
                    // Enable the custom amount input field
                    customAmountInput.removeAttribute('disabled');
                    customAmountInput.value = '';
                    // Clear the custom amount input
                } else {
                    // Disable the custom amount input field and set its value to the selected radio's value
                    // customAmountInput.setAttribute('disabled', 'true');
                    customAmountInput.value = radioButton.value;
                }
            });
        });

        // Add an input event listener to the custom amount input
        customAmountInput.addEventListener('input', () => {
            // Update the selected radio button's value when the custom amount input changes
            radioButtons.forEach(radioButton => {
                if (radioButton.id !== 'donate_amount-7') {
                    radioButton.checked = false;
                }
            });
        });
    </script>
    {{-- ................................................... --}}


    {{-- ***********************item Donation***************** --}}
    <script>
        var tree = document.getElementsByClassName("tree")[
            0]; // Assuming you want to select the first element with the "tree" class
        var treebox = document.getElementsByClassName("treebox")[
            0]; // Assuming you want to select the first element with the "treebox" class

        treebox.style.display = "none";

        tree.onclick = function() {
            treebox.style.display = 'block';
            fertilizerbox.style.display = 'none';

        };


        var fertilizer = document.getElementsByClassName("fertilizer")[
            0]; // Assuming you want to select the first element with the "tree" class
        var fertilizerbox = document.getElementsByClassName("fertilizerbox")[
            0]; // Assuming you want to select the first element with the "treebox" class

        fertilizerbox.style.display = "none";

        fertilizer.onclick = function() {
            fertilizerbox.style.display = 'block';
            treebox.style.display = 'none';
        };
    </script>

    {{-- ................................................... --}}

    {{-- ***********************form ***************** --}}

    <script>
        var Mony_Donationbtn = document.getElementsByClassName("Mony_Donationbtn")[0];
        var Mony_Donation = document.getElementById("Mony_Donation");

        Mony_Donation.style.display = "none";

        Mony_Donationbtn.onclick = function() {
            Mony_Donation.style.display = 'block';
            Service_Donation.style.display = 'none';
            Item_Donation.style.display = 'none';
        };


        var Service_Donationbtn = document.getElementsByClassName("Service_Donationbtn")[0];
        var Service_Donation = document.getElementById("Service_Donation");

        Service_Donation.style.display = "none";

        Service_Donationbtn.onclick = function() {
            Service_Donation.style.display = 'block';
            Mony_Donation.style.display = 'none';
            Item_Donation.style.display = 'none';
        };

        var Item_Donationbtn = document.getElementsByClassName("Item_Donationbtn")[0];
        var Item_Donation = document.getElementById("Item_Donation");

        Item_Donation.style.display = "none";

        Item_Donationbtn.onclick = function() {
            Item_Donation.style.display = 'block';
            Mony_Donation.style.display = 'none';
            Service_Donation.style.display = 'none';
        };

        let save_btn = document.getElementById("save_btn");
        save_btn.addEventListener("click", function() {
            let btn_box = document.getElementsById("btn_box");
            btn_box.style.display = 'block';
            save_btn.style.display = 'none';

        });
    </script>

    <script>
        let add_more_btn = document.getElementsByClassName("add_more_btn")[0];
        let add_more_box = document.getElementsByClassName("add_more_box")[0];
        let addMoreLabel = document.querySelector(".add-more-label");

        add_more_btn.onclick = function() {
            const inputElements = document.createElement("div");

            inputElements.innerHTML = `
                    <label class="form-check-label"> Another Tree :</label>
                    <br><input type="text" class="form-check-input" name="tree_type2" placeholder="Enter tree type" required>
                    <br><input type="number" class="form-check-input" name="tree_type_number2" placeholder="Enter Number of trees " required>
                    <br><div class="center"><button type="button" class="btn btn-danger rounded cancel_btn">Cancel</button></div>
                `;

            // Get the new cancel button and add a click event listener
            let newCancelBtn = inputElements.getElementsByClassName("cancel_btn")[0];
            newCancelBtn.onclick = function(event) {
                event.preventDefault(); // Prevent form submission
                add_more_box.removeChild(inputElements); // Remove the added set of input elements
                newCancelBtn.style.display = 'none';
                add_more_btn.style.display = 'inline-block';
                addMoreLabel.style.display = 'inline'; // Show the "Add more" label again
            };

            add_more_box.appendChild(inputElements);

            add_more_btn.style.display = 'none';
            addMoreLabel.style.display = 'none'; // Hide the "Add more" label
        };
    </script>

    <script>
        let add_more_btn_eq = document.getElementsByClassName("add_more_btn_eq")[0];
        let add_more_eqbox = document.getElementsByClassName("add_more_eqbox")[0];
        let addMore_eqLabel = document.querySelector(".addMore_eqLabel");

        add_more_btn_eq.onclick = function() {
            const inputElements = document.createElement("div");

            inputElements.innerHTML = `
                <br><label class="form-check-label"> Another Equipment :</label>
                    <br><input type="text" name="equipments2" placeholder="Enter the Equipment"><br>
                    <br><div class="center"><button type="button" class="btn btn-danger rounded cancel_eqbtn">Cancel</button></div>
                `;

            // Get the new cancel button and add a click event listener
            let cancel_eqbtn = inputElements.getElementsByClassName("cancel_eqbtn")[0];
            cancel_eqbtn.onclick = function(event) {
                event.preventDefault(); // Prevent form submission
                add_more_eqbox.removeChild(inputElements); // Remove the added set of input elements
                cancel_eqbtn.style.display = 'none';
                add_more_btn_eq.style.display = 'inline-block';
                addMore_eqLabel.style.display = 'inline'; // Show the "Add more" label again
            };

            add_more_eqbox.appendChild(inputElements);

            add_more_btn_eq.style.display = 'none';
            addMore_eqLabel.style.display = 'none'; // Hide the "Add more" label
        };
    </script>

    {{-- ................................................... --}}
@endsection
