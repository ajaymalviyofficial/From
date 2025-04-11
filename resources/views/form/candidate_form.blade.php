<!DOCTYPE html>
<html>
<head>
    <title>Candidate Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg,rgb(40, 195, 201), #e6fffb);
            padding: 50px 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            max-width: 180px;
        }

        .form-container {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 20px;
            max-width: 650px;
            margin: auto;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 18px;
            color: #444;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 10px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        input:focus {
            border-color: #00bcd4;
            outline: none;
            box-shadow: 0 0 5px rgba(0,188,212,0.3);
        }

        button {
            margin-top: 30px;
            width: 100%;
            padding: 14px;
            background-color: #00bcd4;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0097a7;
        }

        .success-message, .error-message {
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .success-message {
            background: #d4edda;
            border: 1px solid #28a745;
            color: #155724;
        }

        .error-message {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>

    <div class="logo">
        <img src="{{ asset('images/image.webp') }}" alt="Logo">
    </div>

    <div class="form-container">
        <h2>Candidate Application Form</h2>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                <strong>Please fix the following errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/submit-candidate">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="full_address" placeholder="Full Address" required>
            <input type="text" name="district" placeholder="District" required>
            <input type="text" name="state" placeholder="State" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="marital_status" placeholder="Marital Status" required>
            <input type="text" name="qualification" placeholder="Qualification" required>
            <input type="text" name="father_name" placeholder="Father's Name" required>
            <input type="text" name="mother_name" placeholder="Mother's Name" required>
            <input type="text" name="job_experience" placeholder="Job Experience (Optional)">
            <button type="submit">Submit Application</button>
        </form>
    </div>

</body>
</html>
