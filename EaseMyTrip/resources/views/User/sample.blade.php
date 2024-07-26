<!DOCTYPE html>
<html>
<head>
    <title>Ease my Trip</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>


<style>
  @page {
            size: A4;
            margin: 0;}
body {
    width: 90%; /* Set full width */
    height: 100%; /* Set full height */
    margin: 0; /* Remove default margin */
    padding: 10mm; /* Add padding for content within the page */
    box-sizing: border-box; /* Include padding in the total width */
    font-family: Arial, sans-serif; /* Use a standard font */
}

.container {
    width: 100%; /* Set full width */
    max-width: 800px; /* Limit container width if needed */
    margin: 0 auto;  /* Center the content horizontally */
    padding: 5px; /* Add padding for content within the container */
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Add additional styling for your content */
.header {
    display: flex;
    align-items: center;
    margin-bottom: 3px;
}

.logo {
    font-size: 20px;
    font-weight: bold;
    color: #0072C6;
    margin-right: 20px;
}

.customer-info {
    margin-left: auto;
    text-align: right;
}

.invoice-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.info-item {
    display: flex;
    align-items: center;
}

.label {
    font-weight: bold;
    margin-right: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #0072C6;
    color: #fff;
}

.totals {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 10px;
}

.total-item {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.payment-info {
    margin-top: 10px;
    font-size: 12px;
    line-height: 1.5;
}

</style>

<body>
    @foreach ($alldata as $i => $a)

    
    <div class="container">
        <div class="header">
            <h1 style="text-align: center;"  ><b> EaseMyTrip </b> </h1>
            <p style="text-align: center; font-size:13px; margin-top:-20px" >GST No: 12345xxx097 <br>Contact No: +91 9898457047 | Email : easemytrip@gmail.com <br>   Address : F-801 Shivalik Shilp, Near Isckon temple ,SG Highway,Ahmedabad-380055 <br></p>
            {{-- <p style="color:black; margin-top:-4px; font-size:10px;">A World Of Wonders</p> --}}
            <div class="customer-info">
               <b> Name:</b> {{$pname}}<br>
               <b> Phone: </b>{{$a['phone']}}<br>
               <b> Email:</b> {{$a['email']}}<br> 
            </div>
        </div>
     
        
        <div class="invoice-info">
            <div class="info-item">
                <span class="label">Invoice No:</span>
                <span class="value">{{$id}}</span>
            </div>
            <div class="info-item">
                <span class="label">Date:</span>
                <span class="value"> {{ now()->format('d-m-Y') }}</span>
            </div>
            <div class="info-item">
                <span class="label">Timing</span>
                <span class="value">{{ now()->format('H:i:s A') }}</span>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Person</th>
                    <th>Pacakge Price</th>
                    <th>Arrival Date</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$a['name']}}</td>
                    <td>{{$a['person']}}</td>
                    <td>{{$a['price']}}</td>
                    <td>{{$a['date']}}</td>
                    <td>{{$a['price']}}</td>
                </tr>
              
            </tbody>
        </table>
        <div class="totals">
            <div class="total-item">
                <span class="label"><b>Paid Amount :</b></span>
                <span class="value">{{$a['price']}}</span>
            </div>
            {{-- <div class="total-item">
                <span class="label">VAT 20%</span>
                <span class="value">£12.00</span>
            </div>
            <div class="total-item">
                <span class="label">Total</span>
                <span class="value">£84.00</span>
            </div> --}}
            {{-- <div class="total-item">
                <span class="label">Paid</span>
                <span class="value">£0.00</span>
            </div>
            <div class="total-item">
                <span class="label">Balance Due</span>
                <span class="value">£84.00</span>
            </div> --}}
        </div>
        <div class="payment-info">
            Payment Gateway: Razorpay<br>
            Payment Id: {{$a['paymentid']}} <br>
            Payment Method: Net Banking <br>
            {{-- Bank Deposit, Card or Cash<br><br>
            Bank Transfer<br>
            Company Name:<br>
            Sort Code: 00-00-00<br>
            A/C No: 0000 0000 --}}
        </div>
    </div>
    @endforeach

    <script>
        // Generate a random number between 1000 and 9999
        var randomNumber = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;

        // Display the random number in the HTML element with id="randomNumber"
        document.getElementById("randomNumber").textContent = randomNumber;
    </script>
</body>
</html>