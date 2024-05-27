<!DOCTYPE html>
<html>
<head>
    <title>IP Scanning</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            margin: 50px auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        h4 {
            margin-top: 0;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .scan-button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .scan-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Scanning your IP</h4>
        <form method="GET" action="">
            <label for="ip">Enter an IP for Scanning:</label>
            <input type="text" id="ip" name="ip" placeholder="127.0.0.1" required>
            <button type="submit" class="scan-button">Scan</button>
        </form>
        <?php
        if (isset($_GET['ip'])) {
            $domain = htmlspecialchars($_GET['ip']);
            $token = 'ab9ce7aa0286f0';
            $url = 'https://ipinfo.io/' . $domain . '/json?token=' . $token;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            if ($output !== false) {
                $info = json_decode($output, true);
                echo '<div>
                    <h4>Results for ' . $domain . '</h4>
                    <table>
                        <tr>
                            <th>IP</th>
                            <td>' . (isset($info['ip']) ? htmlspecialchars($info['ip']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Hostname</th>
                            <td>' . (isset($info['hostname']) ? htmlspecialchars($info['hostname']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>' . (isset($info['city']) ? htmlspecialchars($info['city']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Region</th>
                            <td>' . (isset($info['region']) ? htmlspecialchars($info['region']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>' . (isset($info['country']) ? htmlspecialchars($info['country']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Loc</th>
                            <td>' . (isset($info['loc']) ? htmlspecialchars($info['loc']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Postal</th>
                            <td>' . (isset($info['postal']) ? htmlspecialchars($info['postal']) : '-') . '</td>
                        </tr>
                        <tr>
                            <th>Timezone</th>
                            <td>' . (isset($info['timezone']) ? htmlspecialchars($info['timezone']) : '-') . '</td>
                        </tr>
                    </table>
                </div>';
            } else {
                echo '<div style="color: red;">Failed to retrieve data.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
