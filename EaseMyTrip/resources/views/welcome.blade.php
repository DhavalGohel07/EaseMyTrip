<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Cards</title>
<style>
  body {
    font-family: Arial, sans-serif;
    display: flex;
    background-repeat:no-repeat;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
    background-size: cover;
    background-image: url("/images/welcomepage2.jpg");
  }
  
  .card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px;
    text-align: center;
    width: 300px;
  }
  
  .card img {
    width: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
  }
  
  .card h2 {
    margin-bottom: 10px;
  }
  
  .card p {
    margin-bottom: 20px;
  }
  
  .card button {
    padding: 10px 40px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .card button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <div class="card">
    <img src="/images/admin_profile.jpg" alt="Profile Picture">
    <h2>Admin Dashboard</h2>
    {{-- <p>Web Developer</p> --}}
    <a href="{{ url('/admin-login') }}" > <button>Admin</button></a>
                 
   
  </div>

  <div class="card">
    <img src="/images/user_profile.png" alt="Profile Picture">
    <h2>User Dashboard</h2>
    {{-- <p>Graphic Designer</p> --}}
    <a href="{{ url('/Verify-email') }}" > <button>User</button></a>
   
  </div>
</body>
</html>
