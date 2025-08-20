<!-- <div style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
<h2 style="text-align: center; margin-bottom: 20px;">Add New Employee</h2>

<label for="name">Full Name</label><br>
<input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-bottom: 10px;">

<label for="email">Email Address</label><br>
<input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 10px;">

<label for="position">Position</label><br>
<input type="text" id="position" name="position" style="width: 100%; padding: 8px; margin-bottom: 10px;">

<button style="width: 100%; padding: 10px; background-color: purple; color: white; border: none; border-radius: 4px;">
Add Employee
</button>

<div style="text-align: center; margin-top: 15px;">
<a href="#" style="color: #007BFF;">Forgot some info?</a>
</div>
</div> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    <title>Add Employer</title>
</head>
<body style="margin: 0; height: 70vh; display: flex; align-items: flex-end; justify-content: center; background-color: #f2f2f2;">
<div style="width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: white; margin-bottom: 30px;">
<h2 style="text-align: center; margin-bottom: 20px;">Add New Employee</h2>
<form method="post">  
<label for="name">Full Name</label><br>
<input type="text" id="name" name="name" style="width: 100%; padding: 8px; margin-bottom: 10px;" required >


<!-- <label for="email">Email Address</label><br>
<input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-bottom: 10px;"> -->

<label for="body">Position</label><br>
<input type="text" id="body" name="body" style="width: 100%; padding: 8px; margin-bottom: 10px;"  >
<button style="width: 100%; padding: 10px; background-color: purple; color: white; border: none; border-radius: 4px;">
            Add Employee
</button>
</form>
<div style="text-align: center; margin-top: 15px;">
    <a href="/project" style="color: #007BFF;">back</a>
</div>
</div>
</body>
</html>