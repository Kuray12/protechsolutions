<!DOCTYPE html>
<html>
<head>
    <title>Reverse IP/Domain Lookup</title>
    <style>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><center>Reverse IP/Domain Lookup</center></h4>
            </div>
            <div class="panel-body">
                <form method="GET" action="">
                    <div class="form-group">
                        <label for="domain">Enter a domain or IP to lookup:</label>
                        <input type="text" id="domain" name="domain" class="form-control" placeholder="example.com" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Lookup</button>
                </form>
                <?php
                if(isset($_GET['domain']))
                {
                    $domain = $_GET['domain'];
                    $url = 'https://ipinfo.io/' . $domain . '/json';
                    $data = file_get_contents($url);
                    if($data !== false)
                    {
                        $info = json_decode($data, true);
                        echo '<div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Results for '.$domain.'</h4>
                            </div>
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <th>IP</th>
                                        <th>Hostname</th>
                                        <th>City</th>
                                        <th>Region</th>
                                        <th>Country</th>
                                        <th>Loc</th>
                                        <th>Postal</th>
                                        <th>Timezone</th>
                                    </tr>
                                    <tr>
                                        <td>'.(isset($info['ip']) ? $info['ip'] : '-').'</td>
                                        <td>'.(isset($info['hostname']) ? $info['hostname'] : '-').'</td>
                                        <td>'.(isset($info['city']) ? $info['city'] : '-').'</td>
                                        <td>'.(isset($info['region']) ? $info['region'] : '-').'</td>
                                        <td>'.(isset($info['country']) ? $info['country'] : '-').'</td>
                                        <td>'.(isset($info['loc']) ? $info['loc'] : '-').'</td>
                                        <td>'.(isset($info['postal']) ? $info['postal'] : '-').'</td>
                                        <td>'.(isset($info['timezone']) ? $info['timezone'] : '-').'</td>
                                    </tr>
                                </table>
                            </div>
                        </div>';
                    }
                    else
                    {
                        echo '<div class="alert alert-danger">Failed to retrieve data.</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
