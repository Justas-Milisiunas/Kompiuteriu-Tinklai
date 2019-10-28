<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LD-2 1-dalis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="test">
<div id="page-content">
    <div id="table-div">
        <h2 class="headline">Žinutės</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Message</td>
                <td scope="col">Receiver-Email</td>
                <td scope="col">Ip</td>
                <td scope="col">Data</td>
            </tr>
            </thead>
            <tbody>
            <?php
            include "data.php";

            $message = get_messages();
            foreach ($message as $msg) {
                echo "<tr>
                <td>{$msg[0]}</td>
                <td>{$msg[1]}</td>
                <td>{$msg[2]}</td>
                <td>{$msg[3]}</td>
                <td>{$msg[4]}</td>
                <td>{$msg[5]}</td>
                <td>{$msg[6]}</td>
              </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <div id="form-div">
        <h2 class="headline">Įveskite naują žinutę</h2>
        <div class="form-group">
            <form method="post" action="data.php">
                <label for="name">Siuntėjo vardas</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jūsų vardas" required>

                <label for="email">Siuntėjo e.paštas</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Jūsų e.paštas" required>

                <label for="receiver-email">Gavėjo e.paštas</label>
                <input type="email" class="form-control" id="receiver-email" name="receiver-email"
                       placeholder="Gavėjo e.paštas" required>

                <label for="message">Žinutė</label>
                <textarea name="message" id="message" class="form-control" placeholder="Žinutė" required></textarea>

                <button type="submit" class="btn btn-primary btn-lg"> Siųsti</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>