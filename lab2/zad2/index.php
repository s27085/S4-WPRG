<!--Formularz rezerwacji hotelu:
stwórz formularz, który będzie pozwalał:
 - podać z listy rozwijanej ilość osób (1-4), których dotyczy rezerwacja,
 - wpisać dane osoby rezerwującej pobyt np. imię, nazwisko, adres, dane karty kredytowej, e-mail, podać datę pobytu, czy godzinę przyjazdu itd. (pamiętając o odpowiedniej walidacji pól - typach),
 - zaznaczyć czy jest potrzeba dostawienia łóżka dla dziecka,
 - z listy wybrać odpowiednie udogodnienia np. klimatyzacja i popielniczka dla palacza (pamiętaj określić które pola są wymagane)
stwórz skrypt PHP, który odbierze powyższe dane i w ładny i przejrzysty sposób wyświetli podsumowanie rezerwacji (użyć do wyświetlenia szablonu HTML
Dla zadania nr 2 dodaj krok, w którym w zależności od liczby osób wyświetli się formularz, który pozwoli uzupełnić podstawowe dane tych osób w zgrupowanych formularzach i doda tę informację do podsumowania rezerwacji.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Konrad Fijałkowski">
        <script src="script.js" async></script>
        <style>
            label{
                margin-right: 30px;
            }
            button{
                padding: 0.7rem 1.5rem;
                margin-left: 50%;
            }
            label, input, select {
                margin-top: 0.5rem;
            }
        </style>
    </head>
    <body>
    <form action="script.php" method="post">
        <fieldset>
            <label for="people">People:</label>
        <select name="people" id="people" required>
            <option value="">Choose from list</option>
            <option value="1">1 person</option>
            <option value="2">2 people</option>
            <option value="3">3 people</option>
            <option value="4">4 people</option>
        </select>
        <section>
            <div id="basicInfo">

            </div>
            <label for="creditcard">Credit card number:</label>
            <input type="text" id="creditcard" name="creditcard" required><br>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" required><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required><br>
            <label for="amenities">Amenities:</label>
            <select name="amenities" >
                <option value="" selected disabled>Choose from list</option>
                <option value="Air conditioning">Air conditioning</option>
                <option value="Ashtray">Ashtray</option>
            </select><br>
            <label for="bed">Extra bed for child</label>
            <input type="checkbox" id="bed" name="bed" value="bed">
        </section>
        <button type="submit">Submit</button>
        </fieldset>
    </form>
</html>
