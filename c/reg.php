<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            /* background-color: #333; */
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 14px 20px;
        }
        .navbar img {
            height: 50px;
            margin-right: auto;
        }
        
        .bg {
            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 20px;
        }
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container form input, .form-container form button {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        .form-container form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container form button:hover {
            background-color: #45a049;
        }
        .success-message {
            display: none;
            margin-top: 20px;
        }
        select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}
.ff{
    margin-left: 80px;
}
    </style>
</head>
<body>
<div class="navbar">
        <img src="https://metrouni.edu.bd/frontend/logo/logo.png" alt="Metro University Logo">
    </div>
    <div class="bg">
        <div class="form-container">
            <h1 class="ff">Registration Form</h1>
            <form id="suppleForm">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="id" placeholder="Your ID" required>
                <input type="text" name="department" placeholder="Department" required>
                <input type="text" name="batch" placeholder="Batch" required>
                <!-- <input type="text" name="exam_type" placeholder="Exam Type" required> -->
                <label for="exam_type">Exam_type:</label>
                <select id="exam_type" name="exam_type">
                    <option value="Retake">Retake</option>
                    <option value="Suppliment">Supplimentary</option>
                </select>
                <input type="text" name="course_name" placeholder="Course Name" required>
              
                <input type="text" name="course_code" placeholder="Course Code" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Your Phone Number" required>
                <button type="submit">Submit</button>
            </form>
            <div class="success-message" id="successMessage">
                <p>Registration successful!</p>
                <button id="downloadButton">Download Registration Info</button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('suppleForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = event.target;

            var formData = new FormData(form);

            fetch('submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('successMessage').style.display = 'block';
                console.log(data); // For debugging

                document.getElementById('downloadButton').addEventListener('click', function() {
                    var registrationInfo = '';
                    formData.forEach((value, key) => {
                        registrationInfo += `${key}: ${value}\n`;
                    });

                    var blob = new Blob([registrationInfo], { type: 'text/plain' });
                    var link = document.createElement('a');
                    link.href = URL.createObjectURL(blob);
                    link.download = 'registration_info.txt';
                    link.click();
                });
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
