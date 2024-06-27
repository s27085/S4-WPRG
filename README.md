<h2>LAB 1</h2>
<ol>
<li> Stwórz tablicę zawierającą nazwy kilku owoców (np. "jabłko", "banan", "pomarańcza"). Napisz pętlę, która wyświetli każdy owoc w osobnej linii, pisany od tyłu (nie używaj żadnej funkcji wbudowanej) oraz informację, czy dany owoc zaczyna się literą "p".
<li> Napisz program, który wypisze na ekranie wszystkie liczby pierwsze z zadanego zakresu.
<li> Dla zadanego N napisz program wyliczający N-tą liczbę Fibonacciego. Ciąg powinien zostać zapisany w tablicy, a następnie program wypisze nieparzyste elementy tablicy. Każdy element powinien być w nowej linii, a linie powinny być ponumerowane.
<li> Stwórz z tekstu Lorem Ipsum tablicę (używając explode).<br><br>
    Z utworzonej tablicy usuń wszystkie elementy ze znakami interpunkcyjnymi, używając pętli. Przeiteruj się przez każdy element tabeli, sprawdź, czy ten element jest znakiem interpunkcyjnym,  jeśli jest, to usuń go przez przesunięcie każdego następnego elementu o jeden do tyłu, nie używaj regexu, ale użyj pętli for i instrukcji if.<br><br>
    Na podstawie otrzymanej tablicy utwórz tablicę asocjacyjną przy pomocy pętli foreach, gdzie kolejne elementy parzyste będą kluczami, a elementy po nich następujące wartościami. Każdą parę wypisz w oddzielnej linii.
</ol>
<h2>LAB 2</h2>
<ol>
<li>Prosty kalkulator:
<ul>
    <li>stwórz formularz z miejscem na wpisanie 2 liczb oraz wyborem działania (dodawanie, odejmowanie, mnożenie, dzielenie)
    <li>stwórz skrypt PHP, który obsłuży dane z formularza (na podstawie wybranego działania policzy i wyświetli wynik w przeglądarce)
</ul>
<li>Formularz rezerwacji hotelu:
<ul>
<li>stwórz formularz, który będzie pozwalał: 
    <ul>
        <li>podać z listy rozwijanej ilość osób (1-4), których dotyczy rezerwacja, 
        <li>wpisać dane osoby rezerwującej pobyt np. imię, nazwisko, adres, dane karty kredytowej, e-mail, 
        <li>podać datę pobytu, czy godzinę przyjazdu itd. (pamiętając o odpowiedniej walidacji pól - typach), zaznaczyć czy jest potrzeba dostawienia łóżka dla dziecka,
        <li>z listy wybrać odpowiednie udogodnienia np. klimatyzacja i popielniczka dla palacza (pamiętaj określić które pola są wymagane)
    </ul>
<li>stwórz skrypt PHP, który odbierze powyższe dane i w ładny i przejrzysty sposób wyświetli podsumowanie rezerwacji (użyć do wyświetlenia szablonu HTML)
</ul>

<li>Dla zadania nr 2 dodaj krok, w którym w zależności od liczby osób wyświetli się formularz, który pozwoli uzupełnić podstawowe dane tych osób w zgrupowanych formularzach i doda tę informację do podsumowania rezerwacji.
<li>Czy dana liczba jest liczbą pierwszą?
<ul>
<li>stwórz formularz z miejscem na wpisanie liczby
<li>stwórz skrypt PHP, który przyjmie liczbę z formularza (sprawdzi czy to na pewno liczba całkowita dodatnia), a następnie wywoła funkcję, sprawdzającą czy liczba jest liczbą pierwszą
<li>w swoim programie umieść zmienną, która policzy wszystkie iteracje pętli, potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program, by było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego działania).
</ul>
</ol>
<h2>LAB 3</h2>
<ol>
<li> Utwórz prosty formularz, który pozwoli na wybranie daty urodzenia. Dane powinny zostać przesłane za pomocą metody GET. Po podaniu daty przez użytkownika, należy za pomocą osobnych funkcji sprawdzić i wyświetlić następujące informacje:
-w jaki dzień tygodnia urodził się użytkownik;
-ukończone lata użytkownika;
-ilość dni do najbliższych, przyszłych urodzin.

<li> Napisz funkcję rekurencyjną liczącą silnię lub dowolny wyraz ciągu Fibonacciego oraz jej zwykły odpowiednik (nierekurencyjny). Obie funkcje powinny przyjmować stosowny argument. Następnie zmierz działanie obu funkcji dla argumentu podanego przez użytkownika i wyświetl informacje o tym, która funkcja i o ile działała szybciej.

<li>Stwórz prosty formularz do obsługi zadania. Napisz funkcję, która przyjmie jako pierwszy argument ścieżkę (np. "./php/images/network"), jako drugi nazwę katalogu, a jako trzeci, opcjonalny parametr rodzaj operacji do wykonania:
<ul>
   <li><b>read</b> - odczytanie wszystkich elementów w katalogu (domyślna wartość parametru);
   <li><b>delete</b> - usunięcie wskazanego katalogu w podanej ścieżce;
   <li><b>create</b> - stworzenie katalogu w podanej ścieżce.
</ul>
   Zwróć odpowiedni komunikat (listę elementów lub czy udało się stworzyć/usunąć katalog).
   Przy próbie odczytu pamiętaj o sprawdzeniu, czy dany katalog istnieje, a przy próbie usunięcia - czy katalog jest pusty i czy istnieje. Pamiętaj również o sprawdzeniu, czy ostatnim znakiem ścieżki jest "/" - ułatwi to wykonanie powyższych instrukcji.
</ol>
<h2>LAB 4</h2>
Do zadania z rezerwacją hotelu (z warsztatu 2) dopisać użycie ciasteczek i sesji.
<ul>
<li>Ciasteczka: Formularz, który zostanie wypełniony, po wyłączeniu, następnie włączeniu przeglądarki ma się wczytać do stanu sprzed wyłączenia. Dodać też przycisk, który wyczyści formularz, czyli usunie ciasteczka. Ciasteczka mają mieć ustalona żywotność.
<li>Sesje: wykorzystując mechanizm sesji dodać możliwość logowania. Dane do logowania mogą być "na sztywno" ustawione jako zmienne (formalna rejestracja i przechowanie kont użytkowników będzie do wykonania przy okazji zajęć z baz danych). Cały mechanizm ma działać następująco, po zalogowaniu uzyskuje się dostęp do formularza. Zalogowanie ma utworzyć sesje. Wylogowanie (należy dodać odpowiedni przycisk) ma wykluczyć możliwość korzystania z formularza rezerwacji, czyli bez zalogowania się = otwartej sesji, nie można uzyskać dostępu do formularza.
</ul>
Po zalogowaniu przywitać użytkownika rozpoznając jego login, ale nie ten wcześniej ustawiony jako zmienna, tylko używając ciasteczek.
W przypadku kiedy użytkownik jest niezalogowany, ma otrzymać informację o braku dostępu do tej części strony, gdzie można rezerwować hotel, a także informacje o tym, dlaczego nie może uzyskać tego dostępu (pytanie: dlaczego nie może uzyskać wspomnianego dostępu?).

<h2>LAB 5</h2>
Utworzyć skrypt PHP:<br>
<ol>
<li>Nawiązać połączenie z bazą</li>
<li>Wykonać polecenie SELECT i przećwiczyć polecenia
<ul>
<li>mysqli_fetch_row
<li>mysqli_fetch_array
<li>mysqli_num_rows
</ul>
<li>Wykonać polecenie INSERT INTO (by zaobserwować dodawanie przy pomocy php danych do bazy)
<li>Załączyć skrypt PHP do repozytorium
</ol>


<h2>Forum internetowe</h2>
<p>Forum składa się z kilku działów. Pod każdym działem wyświetla się najnowszy dodany temat. 
    Każdy temat składa się tytułu, treści, daty opublikowania oraz autora. 
    Każdy temat można komentować i udzielać się na forum. 
</p>
<p>
Do każdego komentarza oraz tematu na forum automatycznie przypisywana jest data. Zalogowani użytkownicy mają możliwość dodawania tematów, natomiast niezalogowani mogą dodawać tylko komentarze.
</p><p>
Niezalogowani użytkownicy są zobligowani do wpisania swojego pseudonimu, a strona w jasny sposób pozwala na odróżnienie, czy komentarz dodał użytkownik zalogowany lub niezalogowany. 
</p>
<p>
Dodatkowo każdy użytkownik może stworzyć swój profil z podstawowymi informacjami oraz ze swoim zdjęciem. Na stronie dostępny jest panel administracyjny. 
</p>
<p>
Istnieją różne typy konta: 
<ol>
<li>
    administrator (może wszystko - dodawać, usuwać, edytować wpisy, tematy i działy)
</li>
<li>
    moderator (może dodawać i edytować tematy i komentarze wszystkich użytkowników, może zresetować swoje hasło)
</li>
<li>
    użytkownik (może dodawać tematy i komentarze oraz może zresetować swoje hasło). 
</li>
</ol>
</p>
<p>
Działy, tematy, komentarze i informacje o użytkownikach powinny być przechowywane w bazie danych, a obrazki powinny być przechowywane jako pliki.
</p>
