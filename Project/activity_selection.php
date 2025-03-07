<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activities = $_POST['activities'] ?? [];
    $quantities = $_POST['quantity'] ?? [];

    $activityPrices = [
        "Kayaking" => 500,
        "Jet Ski" => 1500,
        "Helmet Diving" => 3000,
        "Parasailing" => 2000,
        "Clift Diving" => 50,
        "Banana Boat"   => 300,
        "Zip line" => 2000,
        "Snorkeling" => 1000,
        
    ];

    $totalPrice = 0;
    $selectedActivities = [];

    foreach ($activities as $index => $activity) {
        $quantity = intval($quantities[$index]);
        $price = $activityPrices[$activity] * $quantity;
        $totalPrice += $price;

        $selectedActivities[] = [
            "activity" => $activity,
            "quantity" => $quantity,
            "price" => $price
        ];
    }

    echo "<h2>Selected Activities</h2>";
    foreach ($selectedActivities as $item) {
        echo "<p>{$item['activity']} - Quantity: {$item['quantity']} - Price: ₱{$item['price']}</p>";
    }
    echo "<h3>Total Price: ₱{$totalPrice}</h3>";
}
?>