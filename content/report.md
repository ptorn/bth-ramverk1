---
title: "Redovisningar Ramverk1"
...
Redovisningar Ramverk1
=========================


##Kmom01

Jag valde att köra vidare med det vi lärt oss från designkursen och körde på med LESS och rensade upp min kod lite.  Har försökt styra upp logiken och templatekoden så allt är på sin plats som jag tror är lämpligt.

**Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.**

Det som jag skulle vilja lära mig mer om är att tillämpa MVC och strukturera min kod på ett korrekt sätt så man får in det rätta tänket från början. Bygga min kod så jag planerar för att bygga vidare och utveckla den. Jag har börjat testa att skriva lite REST-apier i olika ramverk och försökt att strukturera mig på ett korrekt sätt och känner att jag behöver utvecklas här. Jag tänker mer på hur jag ska strukturera min kod än att bara skriva så denna kursen ligger perfekt i min utvecklingsfas. Ju mer man lär sig desto mer så inser man hur lite man kan och vill bara lära sig mer. TDD är något som jag skulle vilja få in mer. Känner att just testa min kod och vara säker på att min kod håller hög kvalitet är något som jag känner är viktigt. Att kunna visa att man har full koll på sin kod. Tänker att det ger mig som programmerare bättre koll och en bättre utveckling.

Styrka är nog att jag känner mig bekväm att programmera i PHP vilket gör att jag känner mig bekväm med att reflektera över olika strukturer och får fokus på att strukturera och förbättra mitt kodande. Även självinsikt om mina svagheter ser jag bara som en styrka.

**Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?**

Efter min undersökning så kan man se att det är några ramverk som utmärker sig. Framför allt i de flesta listor man har undersökt så ligger Laravel i toppen. Efter kommer ramverk som Symphony, CodeIgniter, Phalcon och CakePHP. Mina källor har varit från Google där jag sökte på ”popular php framework 2017”.
Tar man sedan topp 3 resultaten:
https://coderseye.com/best-php-frameworks-for-web-developers/
https://medium.com/@elitechsystems/the-most-popular-php-frameworks-in-2017-a90a1189405e
https://www.techjunkie.com/popular-php-frameworks/

Det man ser här är att Laravel toppar listorna och är det ramverk som är populärast och används mest för olika projekt.
Om man sen kikar på vad som är det positiva med Laravel så ser man tydligt vad som påverkar mest för att göra ett ramverk populärt jämfört med övriga ramverk. Bland annat nämns att Laravel har den bästa dokumentationen vilket gör jobbet mycket lättare för utvecklare att snabbt komma igång med ramverket. Dokumentationen är varje utvecklares manual så den är viktig för oss.

Nästa på listan av vad som gör ett ramverk populärt är att Laravel har ett stort community bakom sig. Hit kan utvecklare vända sig för att ställa frågor och be om hjälp och kanske hitta lösningar genom att hitta lösningar från andra utvecklares frågor. Det gör att man inte tappar momentum när man väl är redo att börja utveckla.

Man ser även att ett plus är att Laravel kommer med mycket funktionalitet redan från installationen.
Det verkar vara något som uppskattas när man vill komma igång med ett projekt. Sen beror det på vad man ska bygga. Ska man bara bygga ett litet REST-api så kanske man istället valt ett ramverk som SlimPHP istället som inte kommer med så mycket extra funktionalitet som man inte behöver.

**Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.**

Beträffande communities så tror jag att de är väldigt viktiga då ett community i liv och rörelse får ett projekt att kännas som det utvecklas och är på rätt väg. Skulle det inte vara någon vidare aktivitet runt ett ramverk så tappar det nog popularitet då det an kännas som ett ”döende” projekt.
Som utvecklare så är ett sunt community viktigt där man kan ställa frågor, finna lösningar och även hjälpa andra utvecklare och på så sätt så utvecklas hela communityt och projektet lyfts. Det ger en trygghet att man jobbar med ramverk som har en levande kultur och som utvecklas. Även om man kanske får offra att man får med funktionalitet som kanske inte behövs för just det specifika projektet. Det förutsätter att det är en sund jargong i community och inte för många som vill trycka ner de som håller på att lära sig.

Dbwebb är ett tecken på hur viktigt ett community är för en programmerares utveckling. En varm miljö där man känner att man kan ställa frågor utan att bli krossad och även kunna hjälpa andra är något som stärker en själv. Tillsammans utvecklas vi.

**Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?**

Begreppet om ”en ramlös värld” gillade jag då man själv kan välja vad man vill använda och kan man komma överens om en standard så blir det lättare att byta ut moduler sömnlöst och på så sätt komponera sitt projekt. Dock tror jag att de flesta gillar att någon annan redan komponerat ett ramverk med de flesta funktionerna som används.

**Hur gick dina förberedelser inför kommentarssystemet?**

Jag har börjat fundera på en kommentars modul med en controller som styr upp att skicka in kommentaren via en modell till exempelvis en databas och sedan kunna hämta och visa kommentarerna via controllern som skapar objekt av kommentarer från en kommentar modell. Jag har från tidigare kurser som oophp en User klass som jag skulle kunna använda eller bygga vidare på för att hantera användarna som ska kommentera.

Jag har inte skrivit någon kod för detta ännu utan endast reflekterat över uppgiften.


##Kmom02
Tycker det går bättre och bättre med att strukturera min kod. Jag har valt att bygga mot databasen direkt för att spara lite tid. Jag har även implementerat login och olika användartyper som vanlig och administrator. Jag har gjort extrauppgifterna som att endast inloggade användare kan skriva kommentarer och redigera sina egna kommentarer medans administratorn kan redigera och radera allas kommentarer. När man raderar en kommentar så sätts en tidsstämpel så kommentarerna finns fortfarande kvar i databasen. 

Användare är:
doe/doe
admin/admin

**Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?**

Jag har inte direkt någon erfarenhet utav att jobba med MVC mer än det som vi kommit i kontakt med under utbildningen i bland annat oopython och i webbapp där vi försökte skapa modeller och använda oss utav en form av kontroller som skapade våra vyer. Annars så har jag mest varit inne och redigerat lite kod i olika moduler vilket man nu i efterhand har lärt sig ska undvikas utan istället för att modifiera så ska man utöka.

Jag ser många fördelar. Genom att bryta ut olika uppgifter till modeller så gör man det enkelt att byta ut en modell som använder ett interface som modulen förväntar sig mot en annan modell som implementerar samma interface så har man fortfarande kvar full funktionalitet. Tex så har jag implementerat ett interface till min kommentar modul där modellen CommentStorage implementerar ett interface som modulen kräver och då kan jag bara byta ut databas modellen mot vilken lagringsmodell som helst bara den implementerar interfacet så fungerar allt som det är tänkt.

Koden blir även enklare att testa då all logik ligger i sina modeller som kan testas mycket enklare jämfört med om all logik hade legat i routrarna. 

Likaså så ger kontrollern data till de vyer som kontrollern skapar så att vyerna kan jobba mot det som kontrollern skickar med och därmed förhindra att frontendutvecklare går rakt in i ramverket.

Koden blir även lättare att resonera runt när man vet var saker och ting sker och i vilket lager. Blir lättare att förstå flödet.

Jag tycker att det var rätt knepigt att komma igång med var saker och ting ska ske, men ju mer man jobbat på med uppgifterna så har det klarnat och jag har börjat se flödet på sättet som vi jobbar med det i Anax. Mina källor är de som tagits upp under kursmomentet. Har tidigare försökt mig på att klura ut hur flödet ska vara men har hela tiden stött på olika flöden så det har skapat lite förvirring i början. Därför tänkte jag att hålla mig till det som kursen fokuserar på för att börja med det. 

**Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?**

Tyckte videon PHP UK Conference 2017 - Gareth Ellis - Introduction to SOLID var riktigt bra att ta upp flödet och hur man bör tänka när man bygger upp sin arkitektur och vad som är fördelar och nackdelar. Många bra exempel som var enkla att förstå. 

**Single responsibility principle (SRP)** - Menas med att en klass ansvarar för ett område och har endast ett skäl att ändras.

**Open/closed principle (OCP)** - Klasser är stängda för modifiering och endast öppna för utökning.

**Liskov substitution principle (LSP)**  - Detta bygger på att ett objekt av en klass ska kunna ersättas utav ett objekt från dess subklass utan att man ändrar programmets funktion.

**Interface segregation principle (ISP)** – Istället för att ha ett enormt interface för olika program att arbeta mot så att ett program inte är beroende på funktioner som inte används. Därför är det bättre med många och enkla interface.

**Dependency inversion principle (DIP)** – Klasser ska inte vara beroende utav varandra utan beroendet ska läggas som ett abstrakt gränssnitt som ligger på en högre nivå och som klasserna kan jobba med.

**Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?**

Det gick bra. Gick att integrera utan problem. Efter att ha gjort övningen så gick det väldigt smidigt att integrera. Det var en nyttig övning som fick mig att se samspelet och flödet på ett tydligt sätt. Kändes bra att jobba igenom ovningen och resonera under tiden för att se flödet.

**Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?**

Jag har skapat användare som loggar in på sidan för att kunna kommentera. Kommentarerna kan läsas om man inte är inloggad, men man måste logga in för att kunna kommentera. Min modul består utav en kontroller som man skickas till från routern. Kontrollern ligger i $app och behöver ett objekt utav klassen Comment som tilldelas via service.php och en init funktion i kontrollern. På så sätt är beroendet lyft till ett abstrakt plan. Likaså behöver Comment ett objekt utav CommentStorage och en session. Detta sköts ute i service.php

CommentStorage implementerar ett interface så att Comment kan jobba mot det även om vi byter ut lagringsplats. CommentStorage utökar Databas vilket gör att vi kan bara byta ut Databas mot vilken klass som CommentStorage extendar utan att behöva ändra i några andra filer.
Kontrollern ställer frågorna till Comment modellen och skapar därefter vyerna och skickar med den data som vyerna ska ha.
Varje användare kan endast redigera och radera sina egna kommentarer. Administratorn däremot kan redigera och radera alla kommentarer.


##Kmom03
Kommer snart...


##Kmom04
Kommer snart...


##Kmom05
Kommer snart...


##Kmom06
Kommer snart...


##Kmom07/10
Kommer snart...
