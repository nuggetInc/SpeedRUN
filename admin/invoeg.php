<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="CSS/InvoegStyle.css">
    <title>Invoeg</title>
</head>
<body>
    <div class="mid-divs">
        <div class="mid-div">
            <p class="schoen-label">Nieuwe schoen toevoegen</p>
            <div class="form-div">
                <form action="toevoegen/schoen.php" method="POST">
                    <label class="Titel">Titel</label>
                    <input class="titel-input" type="text" name="titel" required>
                    <label class="Titel">Prijs</label>
                    <input class="titel-input" type="text" name="prijs" required>
                    <label class="Titel">Maat</label>
                    <input class="titel-input" type="text" name="maat" required>
                    <label class="Titel">Kleur</label>
                    <input class="titel-input" type="text" name="kleur" required>
                    <label class="Titel">Beschrijving</label>
                    <input class="titel-input" type="text" name="beschrijving" required>
                    <label class="Titel">Foto</label>
                    <input class="titel-input" type="text" name="foto" required>
                    <input type="submit">
                </form>
            </div>
        </div>
        <div class="mid-div"> 
            <p class="schoen-label">Nieuwe accesoire toevoegen</p>
            <div class="form-div">
                <form action="toevoegen/schoen.php" method="POST">
                    <label class="Titel">Titel</label>
                    <input class="titel-input" type="text" name="titel" required>
                    <label class="Titel">Prijs</label>
                    <input class="titel-input" type="text" name="prijs" required>
                    <label class="Titel"></label>
                    <input class="titel-input" type="text" name="maat" required>
                    <label class="Titel">Kleur</label>
                    <input class="titel-input" type="text" name="kleur" required>
                    <label class="Titel">Beschrijving</label>
                    <input class="titel-input" type="text" name="beschrijving" required>
                    <label class="Titel">Foto</label>
                    <input class="titel-input" type="text" name="foto" required>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>