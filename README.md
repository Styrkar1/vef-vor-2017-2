# Verkefni 5

1.
A) POST færir gögn með HTTP headers , þessi gögn eru encoded með Url encoding.
B) GET sendir (encoded) gögn til serverinn, og eins og post notar URL encoding, allt sem fer í gegnum GET sýnist í Url-inum þannig að nota það fyrir lykilorð og þannig er ekki gott.
C) PUT skyptir út öllu því sem það fór yfir með því sem put er að halda um.
D) DELETE Einfaldlega eyðir öllu því sem því er beint á.

2.
Status code er það sem http skilar þér til að segja þér hvað er að (eða ekki að), td 404 page not found
A) status code 200. request frá client fer í gegn eða „OK“
B) Status code 301. eitthvað hefur verið gefið permenant, nýtt url og síðan ætti síðan að skila hvað það Url er. „Moved permanently“
C) Status code 400. HTMl skilur ekki URL-ið vegna óskyljanæegra syntax ú URL-inu. „bad request“
D) Status code 404. serverinn finnur ekkert tengt við gefin URL „not found“
E) Status code 500. Þegar serverinn sjálfur gat ekki uppfyllt eitthvern (líkleka) Kóða „Internal server error“

3.
HTTP/2 Styður priorities, betri packet streaming sem gerir vefsíðurnar hraðari og getur aðlagað vefsíður að öðruvísu skjá stærðum, t.d öðruvísi layout fyrir desktop, tablet og síma

4.
a) kóðinn getur verið fundin á github inní myndir.json.
b) Virkar ekki, sjá kóðan inní save_json.php.
c) Enginn kóði, veit ekki hverning á að láta þetta virka.


5.
{
    "Pizza": { 
        "crust": "Original",
        "toppings": ["Cheese", "Pepperoni", "Garlic"],
        "status": "Cooking",
        "customer": ["name", "phone"]
    }
}

XML:
<?xml version="1.0" encoding="UTF-8" ?>
	<Pizza>
		<crust>Original</crust>
		<toppings>Cheese</toppings>
		<toppings>Pepperoni</toppings>
		<toppings>Garlic</toppings>
		<status>Cooking</status>
		<customer>name</customer>
		<customer>phone</customer>
	</Pizza>

6. tsuts.tskoi.is/2t/0501983759
skilar RAW kóða (eftir decode), veit ekki hverning á að skila í lista.
