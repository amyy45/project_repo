<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Registration Form</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"></link>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <style>
    
    h1{
    text-align: center;
    font-size: 36px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #333;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
  }
  th {
    background-color: #f0f0f0;
  }
    
  .para {
    font-family: "Open Sans", sans-serif;
      font-size: 18px;
      padding: 20px;
      margin: 20px 0;
      text-align: justify;
    }
  </style>
</head>
<body>
  <h1>Employee Registration Form</h1>
  <p class="para">Please fill out this form to register as a new employee. All fields are required, and your information will be kept confidential. Once you submit the form, our HR team will review your application and contact you to discuss next steps. If you have any questions or concerns, please don't hesitate to reach out to us at <a href="mailto:hr@example.com">hr@example.com</a>.</p>
  <div>
  <form>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required style="background-color: #f0f0f0; border: 1px solid #ccc;">    <!--Inline CSS-->

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="jobTitle">Job Title:</label>
    <input type="text" id="jobTitle" name="jobTitle" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="department">Department:</label>
    <select id="department" name="department" required style="background-color: #f0f0f0; border: 1px solid #ccc;">
      <option value="">Select a department</option>
      <option value="HR">HR</option>
      <option value="IT">IT</option>
      <option value="Marketing">Marketing</option>
      <option value="Sales">Sales</option>
    </select>

    <label for="manager">Manager:</label>
    <input type="text" id="manager" name="manager" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate" name="startDate" required style="background-color: #f0f0f0; border: 1px solid #ccc;">

    <input type="submit" value="Register">
  </form>
  </div>
  
  <table>
    <caption style="font-size: 24px; font-weight: bold;">Employee Details</caption>
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>Department</th>
          </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Hillary Nyakundi</td>
            <td>hillary@example.com</td>
            <td>Software Engineer</td>
            <td>IT</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Lary Mak</td>
            <td>lary@example.com</td>
            <td>Marketing Manager</td>
            <td>Marketing</td>
          </tr>
    </tbody>
  </table>
</body>
</html>