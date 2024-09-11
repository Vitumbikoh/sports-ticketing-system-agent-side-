<!DOCTYPE html>
<html>
<head>
    <title>Your Sports Ticket</title>
</head>
<body>
    <div style="border: 2px solid #000; padding: 20px; width: 300px;">
        <h1 style="font-size: 24px; text-align: center;">Your Sports Ticket</h1>
        <p style="font-size: 16px;">Thank you for buying a ticket with our system.</p>
        <hr>
        <table>
            <tr>
                <td><strong>First Name:</strong></td>
                <td>{{ $data['firstname'] }}</td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td>{{ $data['lastname'] }}</td>
            </tr>
            <tr>
                <td><strong>League:</strong></td>
                <td>{{ $data['league'] }}</td>
            </tr>
            <tr>
                <td><strong>Team 1:</strong></td>
                <td>{{ $data['team1'] }}</td>
            </tr>
            <tr>
                <td><strong>Team 2:</strong></td>
                <td>{{ $data['team2'] }}</td>
            </tr>
            <tr>
                <td><strong>Stand Name:</strong></td>
                <td>{{ $data['standname'] }}</td>
            </tr>
            <tr>
                <td><strong>Stand Number:</strong></td>
                <td>{{ $data['standnumber'] }}</td>
            </tr>
            <!-- Add more ticket details here -->
        </table>
        <hr>
        <p style="font-size: 14px;">Thank you for using our system!</p>
    </div>
</body>
</html>
