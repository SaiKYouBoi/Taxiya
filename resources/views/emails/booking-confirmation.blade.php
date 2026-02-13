<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmed!</h1>
    <p>Your booking has been confirmed.</p>
    <p><strong>QR Code:</strong> {{ $booking->qr_code }}</p>
    <p><strong>Total Price:</strong> {{ $booking->total_price }} MAD</p>
    <p><strong>Status:</strong> {{ $booking->status }}</p>
    <p>Thank you for choosing our service!</p>
</body>
</html>
