<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // படிவத்தில் உள்ள தரவைப் பெறுதல்
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project_name = $_POST['project_name'];
    $handcraft_type = $_POST['handcraft_type'];
    $description = $_POST['description'];
    $materials = $_POST['materials'];
    $completion_date = $_POST['completion_date'];
    $challenges = $_POST['challenges'];
    $feedback = $_POST['feedback'];

    // கோப்புக்கு தரவைச் சேமித்தல்
    $data = "$name, $age, $grade, $email, $phone, $project_name, $handcraft_type, $description, $materials, $completion_date, $challenges, $feedback\n";
    file_put_contents('submissions.txt', $data, FILE_APPEND);

    // பயனருக்கு பதில் வழங்குதல்
    echo "உங்கள் படிவம் வெற்றிகரமாக சமர்ப்பிக்கப்பட்டது!";
}
?>
