<!DOCTYPE html>
<html>
<head>
    <title>Subdomain Scan</title>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><center><i class="fas fa-sign-in-alt"></i> Subdomain Scan </center></h4>
            </div>
            <div class="panel-body">
                <form method="GET" action="">
                    <div class="form-group">
                        <label for="domain">Masukan domain :</label>
                        <input type="text" id="domain" name="domain" class="form-control" placeholder="example.com" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET['domain']))
    {
        $domain = $_GET['domain'];
        $url = 'https://api.hackertarget.com/reverseiplookup/?q=' . $domain;
        $result = file_get_contents($url);
        if($result !== FALSE) {
            $subdomains = explode("\n", $result);
            echo '<div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><center><i class="fas fa-sign-in-alt"></i> Hasil Pencarian </center></h4>
                    </div>
                    <div class="panel-body">
                        <ul>';
            foreach($subdomains as $subdomain) {
                echo '<li>' . $subdomain . '</li>';
            }
            echo '</ul>
                    </div>
                </div>
            </div>';
        } else {
            echo 'Failed to retrieve data.';
        }
    }
    ?>
</body>
</html>
