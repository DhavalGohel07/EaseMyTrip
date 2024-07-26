<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ease my Trip</title>
</head>
<style>
    /* Example CSS styles for the Razorpay payment button */
    .razorpay-payment-button {

        display: none;
    }
    p {
            text-align: left;
            font-size: 18px;
        }
        li{
            font-size: 20px;

        }
    #myButton {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: 10%;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        

    }


    /* Style for disabled button */
    #myButton:disabled {
        background-color: #808080;
        /* Grey */
        cursor: not-allowed;
    }
</style>

<body>


    <div class="container tex-center mx-auto">
        <form action="/pay" method="POST" class="text-center mx-auto mt-5">


            <h1 style="margin-left: 30px;"><b>* Please Read Terms and Condition Carefully Before Payment *</b></h1>
            <ul>
                <li>Payment Processing Agreement: The agreement between you (the merchant) and Razorpay outlining terms of service for processing payments.</li>
                <li>Registration: Requirement for merchants to register an account with Razorpay to use their services.</li>
                <li>Fees: Details on transaction fees, including rates for different payment methods (credit/debit cards, net banking, etc.) and any additional charges.</li>
                <li>Settlement Period: Information on how quickly funds from transactions are settled into the merchant's bank account.</li>
                <li>Refunds: Procedures and conditions for processing refunds, including any associated fees or timeframes.</li>
                <li>Chargebacks: Process for handling chargebacks, including documentation requirements and dispute resolution procedures.</li>
                <li>Acceptable Use: Guidelines on the types of businesses and transactions permitted to use Razorpay's services.</li>
                <li>Prohibited Activities: List of activities not allowed, such as fraud, money laundering, illegal transactions, etc.</li>
                <li>Data Protection: Assurance of data protection measures, including encryption, PCI compliance, and data handling practices.</li>
                <li>Privacy Policy: Details on how Razorpay collects, uses, and protects personal and transactional data.</li>
                <li>Security: Information on security measures in place to protect against unauthorized access, breaches, and fraud.</li>
                <li>Indemnity: Clarification of liability and indemnification terms for both parties in case of disputes or losses.</li>
                <li>Service Interruptions: Policy for handling service interruptions, including downtime and maintenance schedules.</li>
                <li>Service Level Agreement (SLA): Terms governing uptime, availability, and support provided by Razorpay.</li>
                <li>Termination: Conditions under which either party can terminate the agreement, including notice periods and consequences.</li>
                <li>Governing Law: Specification of the governing law and jurisdiction for resolving disputes.</li>
                <li>Updates to Terms: Notification process for updates or changes to the terms and conditions, including any opt-out options.</li>
                <li>Customer Support: Details on available customer support channels and response times.</li>
                <li>Compliance: Requirement for merchants to comply with all relevant laws, regulations, and industry standards.</li>
                <li>Dispute Resolution: Procedures for resolving disputes between the merchant and Razorpay, including mediation or arbitration processes.</li>
            </ul>
            

            <br>

            <input type="checkbox" id="toggleCheckbox" style="margin-left: 30px; "> <label style="color: red; font-size:20px;" >I agree to the terms and conditions</label>
            <br><br>
            <button id="myButton" style="margin-left: 30px;" disabled>Confim Payment</button>


            @csrf
            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_M8861YNKTu5BjB"
                data-amount="{{ Session::get('price') * $persons }}" data-currency="INR" {{-- data-buttontext="Pay Now" --}}
                data-name="Ease My Trip" data-description="Rozerpay"
                data-image="https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png" data-prefill.name="name"
                data-prefill.email="email" data-theme.color="#F37254"></script>

            {{-- <button type="submit" class="razorpay-payment-button">Pay Now</button> --}}

        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Get the checkbox and button elements
        var toggleCheckbox = document.getElementById('toggleCheckbox');
        var myButton = document.getElementById('myButton');

        // Add event listener to checkbox for change event
        toggleCheckbox.addEventListener('change', function() {
            // Check if checkbox is checked
            if (toggleCheckbox.checked) {
                // Enable the button and remove disabled attribute
                myButton.removeAttribute('disabled');
            } else {
                // Disable the button and add disabled attribute
                myButton.setAttribute('disabled', 'disabled');
            }
        });
    </script>

</body>

</html>
