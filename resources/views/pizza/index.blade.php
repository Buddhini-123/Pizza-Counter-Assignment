<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizza Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #333;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 22px;
            margin-bottom: 10px;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }
    </style>
</head>
<body>
    <h1>🍕 Pizza Calculator</h1>
    <h1>✅ Best Package: <strong>{{ $bestPackage['package'] }}</strong> ({{ $bestPackage['packs'] }} packs - ${{ $bestPackage['total_cost'] }})</h1>
    <h1>👥 Number of People: {{ $people }}</h1>
    <h1>🍕 Total Slices Needed: {{ $totalSlices }}</h1>

    <table>
        <thead>
            <tr>
                <th>Package</th>
                <th>Packs</th>
                <th>Total Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result['package'] }}</td>
                    <td>{{ $result['packs'] }}</td>
                    <td>${{ $result['total_cost'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
