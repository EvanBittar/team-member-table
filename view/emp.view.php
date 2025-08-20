<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="applicant">
    <h3 class="text1">Applicant Information</h3>
    <p class="intext1">Personal details and application.</p>
</div>
<div class="lol">
    <dl>
    <div class="title">
        <dt class="Applicant-label">Full name</dt>
        <dd class="Description-text"><?= $emp['title'] ?></dd>
    </div>
    <div class="title">
        <dt class="Applicant-label">Application for</dt>
        <dd class="Description-text"><?= $emp['body'] ?></dd>
    </div>
    <div class="title">
        <dt class="Applicant-label">Email address</dt>
        <dd class="Description-text"><?= $emp['email'] ?></dd>
    </div>
    <div class="title">
        <dt class="Applicant-label">Salary expectation</dt>
        <dd class="Description-text">$120,000</dd>
    </div>
    <div class="title">
        <dt class="Applicant-label">About</dt>
        <dd class="Description-text">we will do it later</dd>
    </div>
    </dl>
    <div style="text-align: right; margin-top: 10px;">
        <a href="/project" style="color: #007BFF;">
            <button style="padding: 6px 12px;">back</button>
        </a>
    </div>
</div>
</body>
</html>