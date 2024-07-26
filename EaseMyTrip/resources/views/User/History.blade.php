<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ease my Trip</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f5ff;
    color: solid black;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 10px;
}

.table-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 80%;
    align-items: center;
    margin-left: auto;
    margin-right: auto;
   
    
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
    
}

th, td {
    padding: 12px 16px;
    text-align: left;
    
}

th {
    background-color: #f15d30;
    color: #ffffff;
    font-weight: 500;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

.fonts{

    color: black;
}
tr:hover {
    background-color: #f3e0da;;
}

@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px 12px;
    }
}
.btn{

    border:2px solid black;
    border-radius: 25px;
    font-weight: bold;
}

@media (max-width: 480px) {
    table {
        font-size: 12px;
    }

    th, td {
        padding: 6px 8px;
    }
}
#myButton {
        background-color: #f15d30;
        /* Green */
        border: none;
      
        padding: 7px 28px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: 10%;
        margin-top: 30px;
        cursor: pointer;
        border-radius: 8px;
        /* height: 30px;; */
    }
    #myButton a{

        color: white;

    }
    </style>
<body>
    <br><br>
    <div >
        <center>
       <h1 style="font-weight: bold; color:black;">Booking History</h1>
        </center>
    </div>

<br>
    <div class="table-container" >
        
        <table>
            <thead>
                <tr>
                    <th>Booking Id</th>
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Persons</th>
                    <th>Arrival Date</th>
                    <th>Contact</th>
                    <th>Payment Id</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($alldata as $i => $a)
            @csrf
                    <tr class="fonts">
                        <td>{{ $a['id'] }}</td>
                        <td>{{ $a['name'] }}</td>
                        <td>{{ $a['price'] }}</td>
                        <td>{{ $a['person'] }}</td>
                        <td>{{ $a['date'] }}</td>
                        <td>{{ $a['phone'] }}</td>
                        <td>{{ $a['paymentid'] }}</td>
                       <td> <button class="btn" ><a href="/download-pdf/{{ $a->id }}">Invoice <i class="fa fa-download"></i></a></button></td>
                    </td>
                    </tr>
                </form>
            @endforeach



            </tbody>
        </table>
                 
    </div>
   
   
  
        <button  id="myButton" style="margin-left: 150px;" ><a href="/home"><i class="fa fa-reply"></i> Back To Home</a></button>

  
   


    
</body>
</html>