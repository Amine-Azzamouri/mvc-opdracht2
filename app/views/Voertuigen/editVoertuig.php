<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Overzicht wijzigen</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }

        form {
            width: 60%;
            margin: 0 auto;
            max-width: 800px;
        }

        fieldset {
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            background-color: rgba(100, 62, 177, 0.632);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
        }

        .instructeur-options {
            display: flex;
            gap: 10px;
        }

        .instructeur-options select {
            flex: 1;
        }
    </style>
</head>
<body>
    <u><?= $data['title']; ?></u>
    <form action="process_form.php" method="post">
        <fieldset>
            <legend>Instructeur wijzigen</legend>

            <label>
                Instructeur:
                <div class="instructeur-options">
                    <select name="select_option_1">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                    <select name="select_option_2">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                    <select name="select_option_3">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>
            </label>

            <label>
                Type voertuig:
                <select name="select_option_2">
                    <option value="option1">Personenauto</option>
                    <option value="option2">Vrachtwagen</option>
                    <option value="option3">Bus</option>
                    <option value="option4">Bromfiets</option>
                </select>
            </label>

            <label>
                Type:
                <input type="text" name="text_input_3" required />
            </label>

            <label>
                Bouwjaar:
                <input type="date" name="date" />
            </label>

            <label>
                Brandstof:
                <label><input type="radio" name="brandstof" value="option1" /> Diesel</label>
                <label><input type="radio" name="brandstof" value="option2" /> Benzine</label>
                <label><input type="radio" name="brandstof" value="option3" /> Elektrisch</label>
            </label>

            <label>
                Kenteken:
                <input type="text" name="text_input_4" />
            </label>

            <input type="submit" value="Wijzig" />
        </fieldset>
    </form>
</body>
</html>
