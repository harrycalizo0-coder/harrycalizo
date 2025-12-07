<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spicy Bulalo Order Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-image: url("https://images.unsplash.com/photo-1504674900247-0877df9cc836");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        .form-container {
            position: relative;
            z-index: 1;
            max-width: 600px;
            margin: 70px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        h1 {
            text-align: center;
            font-size: 35px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px black;
        }

        label {
            font-size: 18px;
            font-weight: 600;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background: #ff3c3c;
            border: none;
            padding: 15px;
            font-size: 18px;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #cc2f2f;
            transform: scale(1.03);
        }

        .summary-box {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="overlay"></div>

<div class="form-container">

<?php  
// --- IF FORM IS SUBMITTED, SHOW ORDER SUMMARY ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $size = $_POST["size"];
    $spice = $_POST["spice"];
    $note = $_POST["note"];

    echo "<h1>🔥 Order Summary</h1>";
    echo "<div class='summary-box'>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Serving Size:</strong> $size</p>";
    echo "<p><strong>Spice Level:</strong> $spice</p>";
    echo "<p><strong>Special Instructions:</strong> $note</p>";
    echo "</div>";

    echo "<br><button onclick='history.back()'>⬅ Back to Form</button>";

} else {
?>

    <h1>🔥 Spicy Bulalo Order Form</h1>

    <form action="" method="POST">

        <label for="name">Full Name:</label>
        <input type="text" name="name" required placeholder="Enter your name">

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" required placeholder="09XXXXXXXXX">

        <label for="size">Choose Serving Size:</label>
        <select name="size" required>
            <option value="">-- Select Size --</option>
            <option>Solo - ₱199</option>
            <option>Medium (2–3 pax) - ₱349</option>
            <option>Family (4–6 pax) - ₱599</option>
        </select>

        <label for="spice">Spice Level:</label>
        <select name="spice" required>
            <option value="">-- Select Spice Level --</option>
            <option>Mild 🌶️</option>
            <option>Medium 🌶️🌶️</option>
            <option>Extra Hot 🌶️🌶️🌶️</option>
        </select>

        <label for="note">Special Instructions (optional):</label>
        <textarea name="note" rows="4" placeholder="Example: Extra chili, no corn, etc."></textarea>

        <button type="submit">Place Order</button>
    </form>

<?php
}
?>

</div>

</body>
</html>
