<!DOCTYPE html>
<html>
<head>
    <title>Candidate Email</title>
</head>
<body>
    <h2>New Candidate Form Submission</h2>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Full Address:</strong> {{ $data['full_address'] }}</p>
    <p><strong>District:</strong> {{ $data['district'] }}</p>
    <p><strong>State:</strong> {{ $data['state'] }}</p>
    <p><strong>Age:</strong> {{ $data['age'] }}</p>
    <p><strong>Marital Status:</strong> {{ $data['marital_status'] }}</p>
    <p><strong>Qualification:</strong> {{ $data['qualification'] }}</p>
    <p><strong>Father's Name:</strong> {{ $data['father_name'] }}</p>
    <p><strong>Mother's Name:</strong> {{ $data['mother_name'] }}</p>
    <p><strong>Job Experience:</strong> {{ $data['job_experience'] ?? 'N/A' }}</p>
</body>
</html>
