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
**Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?**

Det känns bra. Tycker det känns som ett effektivt sätt att jobba och framförallt lazy loading som sparar resurser. Bättre att återanvänder objekt istället för att hela tiden skapa nya vilket tar upp resurser i onödan och att man skapar objekten när man behöver objekten och inte alla i önödan. Vill man dra det långt så varje onödig resurs sliter mycket på miljön i onödan. Om jag inte minns fel så var det någon video som tog upp hur man kan spara miljön genom att uppgradera till PHP7 så även denna lilla besparing av resurser är inte fel även om vår me-sida kanske inte är den mest resurskrävande och hårt belastad sida så är det något som vi webbprogrammerare måste tänka på. Så med det i bakhuvudet så känns det som ett givet val att tillämpa lazy loading. Dependency injection känns också bra. Vi lyfter beroendet till ett abstrakt plan och våra moduler behöver inte bry sig om vart beroendena kommer ifrån.

Service locator känns på ett sätt bra att saker kopplas ihop nr de behövs och nr man behöver de så finns de på ett ställe.

**Hur känns det att göra dig av med beroendet till $app, blir $di bättre?**

Det var lite pill att gå över till $di, men det beror nog på att man lagt till många delar som behövde uppdateras. Tycker att med $di så blir det mycket tydligare var logiken hamnar och att controllerns roll blir mycket tydligare. Även om det kanske blir fler rader kod så tycker jag man ser tydligt var allt ska ligga. Annars så är det ingen större skillnad på att använda $di istället för $app. Gillar $di bättre än hur vi jobbade med $app tidigare.
Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?
Det känns bra. Jag har delat upp koden bättre och med lazy loading fått till en bättre uppdelning utav min kod för att lyfta ut beroendena på ett abstrakt plan. Vilket jag tycker känns bättre. Sen så känns det som man hela tiden tweakar sin kod och försöker göra den bättre.

**Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?**

Jag hade redan skrivit rätt mycket på mitt kommentarssystem så jag bytte mest ut $app till $di vilket gick bra. Jag har plockat bort allt som beror på $app och jobbar nu enbart med $di. Det gick smärtfritt även om det tog lite tid att byta ut $app på alla ställena. Det ända bekymret jag stötte på var att några filer hade bytt läs och skrivrättigheter utan att jag märkt det. Testar lite olika verktyg att koda i som säkert har påverkat, men när jag hittat felet så var det snabbt åtgärdat.

**Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?**

Jag implementerade redan min kommentarsmodul med en databaskoppling i kmom02 så jag har redan en modell på hur jag löst det. Dock får vi se om det räcker till kommande uppgifter.

**Allmänna kommentare kring din me-sida och dess kodstruktur?**

Rent allmänt så tycker jag att jag blir bättre på att strukturera mig och tillämpa MVC. Försöker att dela upp de olika delarnas ansvar och att varje klass ska ansvara för sitt. Jag ser hela tiden nya saker som jag kan förbättra och det blir en hel del refaktoring på min kod löpande.


##Kmom04
**Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?**

Det var inga problem med integrationen utav formulärhanteringen, men med databasen så fick jag lite problem när mitt CommentStorage Interface krockade med databas modulen. Tanken som jag har haft med min kod är att kommentars modellen eller min CommentarService som hjälper till med att hantera kommentarerna ska inte behövas ändras i bara för att lagringsmodellen ändras. Så därför var det lämpligt med ett interface. Jag ändrade metodnamnen och i mitt interface just för att inte krocka och nu efter det så kan jag byta ut vilken lagringsmetod som helst om den tillämpar mitt interface. Så nu känns det bättre och man har delat upp logiken där den hör hemma. Likaså följde jag samma mönster för mina användare.

**Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?**

Tycker det fungerar bra och man får ett lager till emellan modellerna som får hantera hur själva kommunikationen ska ske med databasen. Känns enkelt att jobba med och blir snygg och tydlig kod. Känns som ett sätt att skriva enklare kod och med mindre upprepningar. Jag har inte stött på några nackdelar med Active record så jag kan inte säga något negativt ännu. Vad jag gillar är att man delar upp koden i lager och får smidigare metoder att jobba med.

**Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?**

Känns bra. Jag valde dock att inte lägga till data från formulären i callbacken utan anropar istället metoderna i mina serviceklasser. Kändes lite rörigt att lägga logik för att hämta och lagra användare/kommentarer i formulärhanteringen när den uppgiften ligger i serviceklasserna. Nu skapas det en kommentar i callbacken till formuläret medans serviceklassen håller koll på var den ska sparas med hjälp utav min CommentStorage så jag har delat upp ansvaret och låtit varje del få ha sitt ansvar. Tycker att koden blir snyggare och vi delar upp den bättre. Har lite mer jag måste fila på, men tar det löpande.

**Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?**

Min erfarenhet sträcker sig till det som vi har tagit upp under utbildningen. I OOPython så kom vi i kontakt med ORM genom SQLAlchemy där vi mappade data i våra klasser. Med active record så får vi nästan samma upplägg. Det som jag har läst mig till under kursmomentet skulle väl vara att varje objekt som man skapar med active record ärver hela ORM vilket kanske kan bli mycket. Jämfört med objekt med data mapper som inte alls behöver veta något om databasen.

**Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?**

Tycker att det är väldigt användbart när man kan spara tid genom att automatisera grovjobbet. Genom att snabbt få till en grundstruktur så kan man påbörja jobbet med att utveckla sin applikation. Tid är pengar. Som programmerare så vill man komma igång och utveckla så fort det går och kan man automatisera så är det vårt jobb att fixa det.


##Kmom05
**Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?**

Det gick bra. Känns väldigt smidigt. Ska man använda samma modul i flera installationer och vill kunna uppdatera på ett enkelt sätt så är det väldigt smidigt att använda sig utav composer. Tycker jag har tänkt mer på min kod och vilka beroenden de egentligen har och har gjort lite små ändringar för att få en så smidig modul som möjligt så att man kan plocka modulen och använda i andra sammanhang och inte låst till det som vi gör just nu.

Hittade ställen där min kod inte täckte upp alla möjliga händelser och kanske inte gav det som man förväntade sig vid ett visst tillfälle så där kände jag att när man jobbade mer med enhetstester så fick jag mer koll på de olika händelserna i koden och kunde få lite bättre kvalitet på koden.

**Flöt det på bra med GitHub och kopplingen till Packagist?**

Ja det var inget som var problematiskt utan allt gick bekymmersfritt. Väldigt smidigt att kunna ha det automatiserat. Tagga och pusha så sköts det i bakgrunden. Magiskt. Känns självklart nu när vi jobbar med moduler så här och kunna dela upp. Ser fram emot delarna med automatiska tester utav koden i nästa kursmoment.

**Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?**

Jag följde min manual steg för steg och det fungerade som tänkt och gick smärtfritt. Det var bara att göra en composer require ptorn/bth-anax-user och kopiera de filerna som jag angivit i min Readme.
Följde guiden när jag installerade modulen i min anax installation som nu använder min nya modul.

**Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?**

Jag har inte hunnit få 100% på hela modulen utan ligger just nu på 66.67%. Har en bit kvar att gå, men behöver lägga lite mer tid på att se hur jag ska kunna testa de olika delarna som jag har kvar. Har försökt att täcka in så mycket som möjligt, men har inte klurat ut hur jag ska testa min controller klass som renderar sidorna.

**Några reflektioner över skillnaden med och utan modul?**

Först så känner jag att ska man bygga upp en kodbas och underhålla den samtidigt som den ska användas på många olika ställen så är detta ett väldigt bra sätt att jobba på. När vi automatiserar mer så minskar vi de mänskliga felen som kan uppstå.
Känner att det är så här man vill jobba och underhålla sin kod. Moduler som integreras i ramverket och skapar grunden för sin applikation. Lättare att testa sin modul i en isolerad miljö och inte blanda in övriga delar utan man avgränsar varje modul.

##Kmom06

**Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?**

Jag har inga egna tidigare erfarenheter angående detta. Jag har mest sett det användas utav olika personer som jag följer. Detta är något som jag velat fördjupa mig i. Efter detta kursmomentet så känns det som att man har fått en bra koll på hur man ska jobba med de olika verktygen. och det känns bra nu när man fått använda sig utav det.

**Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?**

Allt som kan spara tid och öka kodkvaliteten är en bra väg att gå. Man är bara en människa och man gör misstag. Jag har sett saker som jag missat, men som snappats upp av de automatiska testerna så det blir ett bättre resultat i slutändan. Skulle nog säga att det är nödvändigt när man jobbar med andra på ett större projekt och andra är beroende utav ens kod. Då känns det bra att veta att modulen löser det som den ska lösa och testerna ser till att hålla en uppdaterad hur det går löpande. Då kan man jobba vidare med sin modul och utveckla den löpande och ändå ha koll på sin kod.

Man får en tydlig bild utav modulens liv och kan se var olika problem introduceras och utav vem. Man får en tydlig historik när ny kod läggs till och av vem så man kan rätta till sina misstag.

**Hur stor kodtäckning lyckades du uppnå i din modul?**

Jag kom upp i 92%. Ska se om jag inte kan komma upp lite högre. Måste kika på hur jag ska kunna testa formulären som skapar användaren för att kunna nå högre. Annars tycker jag det har varit väldigt lärorikt. Jag började med att använda mig utav en fil-baserad SQLite databas när jag gjorde mina tester. Databasen skrevs över med exempeldata mellan testerna, men fick ändå problem med att databasen var låst så jag fick använda mig utav SQLite i minnet vilket startade en process per test istället för att låsa upp filen så det fungerade utan problem att testa efter det.

**Berätta hur det gick att integrera mot de olika externa tjänsterna?**

Det gick bra. Var inga konstigheter att lösa eftersom allt var så välanpassat till Github så det var löst genom bara några klick. Det som var nyttigt var att få klicka runt och se fördelarna med de olika verktygen. Man fick ganska snabbt en bild utav vad de olika verktygen gjorde. Även om det känns onödigt med verktyg som kollar samma saker så var det rätt nyttigt att få chansen att prova olika tjänster. Jag följde artikeln och integrerade min modul mot alla tjänsterna som togs upp.

**Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?**

Alla reagerade lite olika på sakerna. Den som jag vände mig till mest för att se resultatet blev Scrutinizer där jag tyckte man fick bra information om koden och det var lätt att navigera runt på sidan. Travis och CircleCI kändes mest att man bara kollade så det var grönt. Kollade det som man själv gjorde innan och nu är det automatiserat. Scrutinizer gjorde det där lilla extra och verkligen analyserade koden. SensioLabs hittade bortkommenterad kod så man kunde rensa upp och snygga till koden lite. Överlag så känns det som vår verktygslåda har utvecklats ytterligare med väldigt användbara verktyg.


##Kmom07/10

WGTOTW -Kmom10 Ramverk1

Följande användare fungerar:

admin/admin
doe/doe

**Krav 1, 2, 3**

Till en början så skapade jag ett repo på github ”ptorn/ramverk1-QandA”. Som grund för uppgiften så scaffoldade jag fram en installation utav Anax som jag commitade till github som min första commit.

Hemsidan skulle skyddas utav ett login så det jag gjorde var att jag gjorde en ”composer install ptorn/bth-anax-user” och installerade min användarmodul som tog hand om hela användardelen. Den modulen är nu ett beroende för projektet. Man loggar in genom att gå till ”user/login” och där fylla i sina användaruppgifter. Har man inget konto så kan man skapa ett. När man loggat in så kan man gå till administrations delen och där ändra sina uppgifter. Med hjälp utav e-postadressen så hämtar jag användarens gravatarbild som är kopplad till e-postadressen.

Hemsidan innehåller en förstasida där jag har en välkomnande text som efterföljs utav de 3 senaste frågorna. Klickar man på en fråga så kommer man till frågans sida och där kan man se svaren som är kopplade till frågorna. I högra kolumnen så listar jag de mest populära taggarna. Taggarna är i sintur länkade till en sida där alla poster som delar samma tag listas. Under i samma kolumn så listas de mest aktiva användarna och deras rang.

Nästa sida är ”Frågor” som listar alla frågor i en lång lista där jag kan sortera på datumet som frågorna skapades samt jag kan rösta på frågorna.

Varje fråga visar antalet röster. Man ser antalet ”tummen-upp” och antalet ”tummen-ner” Frågan får en rang som är differensen mellan tummen-upp och tummen-ner. Kommer gå in lite mer på röstningen i Krav nr 4.

Det finns en ”Om” sida där jag beskriver projektet och mig själv. Om-sidan innehåller också en länk till GitHub-repot för projektet.

Man kan bara läsa frågor, svar och kommentarer utan att vara inloggad. Som inloggad användare så kan man ställa en fråga. Varje fråga kopplas till en användare. Varje fråga kan ha svar och varje svar kan ha kommentarer. Svaret på en fråga kopplas till användaren och frågan som den är ett svar för. Likaså är kommentarerna kopplade till ett svar som är kopplat till en fråga och användaren som skrivit det. På så sätt har man full koll på vem som skrivit vad och till vilken fråga,svar och kommentar det är.

Varje fråga kopplas till taggar som ligger i databasen. När man skapar en fråga så kan man lägga till frågan till taggar genom att skriva taggarna kommaseparerade. Finns taggen inte så skapas den och frågan kopplas till taggen. Finns den redan så kopplas bara frågan till taggen. Taggarna listas under en egen sida ”Taggar” och där kan man klicka på en tagg för att lista alla frågor som är kopplade till taggen. Likaså på första sidan så listas de populärsate taggarna och hur många frågor som är kopplade till taggen. Genom att klicka där så kommer man till samma sida som listar alla frågor som är kopplade till just den taggen.

Varje fråga kan ha många svar. Kommer gå in mer på hur man kan hantera svaren i krav 4. Varje svar kan i sin tur ha flera kommentarer. Frågorna, svaren och kommentarerna kan alla hantera markdown.

Webbplatsen finns på GitHub där man med hjälp utav README.md filen kan installera den själv för att använda den. I README.md filen på GitHub så ser man statusen på TravisCi och scrutinizer som är kopplade till repot.

**Krav 4**

Varje användare som har skrivit en fråga kan själva välja vilket svar som de vill acceptera som ”rätt” svar på sin fråga. Det är bara frågeställaren själv som kan acceptera svaret på sin fråga. Frågan får då en notis som visar att just det svaret är det accepterade svaret. Skulle ett annat svar dyka upp som är bättre så kan frågeställaren välja att acceptera det bättre svaret och då markeras det svaret som accepterat och det tidigare accepterade svaret förlorar sin notis.

Man kan rösta på varje fråga,svar och kommentar. Varje användare kan rösta endast en gång på varje fråga. Antingen röstar man tummen-upp eller tummen-ner. Betyget på varje fråga blir differensen mellan tummen-upp och tummen-ner så baserat på det värdet så får frågorna, svaren och kommentarerna olika rang.  Rösterna kopplas till användaren och innehållet som den röstar på.

Under sidan med ”Frågor” så listas varje fråga med sin Rang och man kan rösta på varje fråga. Man kan även se hur många svar en fråga har samt hur många kommentarer som finns under frågan och svaren.

Frågorna som listas under frågor kan sorteras efter fallande och stigande datum som bygger på datumet som de skrevs. Koden kollar så att endast tillåtna variabler används för att undvika att den kraschar eller att någon försöker missbruka sidan.

Man kan även sortera på frågornas rang på frågesidan. Allt hålls isär i databasen i egna tabeller så man kan se vilka användare som har gjort vad och då följa upp allt med deras status.

**Krav 5**

Jag har infört ett poängsystem som bygger på att varje användare får poäng för varje fråga,svar och kommentar som användaren har skrivit. En användare får också poäng för varje tummen-upp som användaren får på något av sina frågor, svar eller kommentarer. Allt detta summeras till ett värde som blir en användares rang. Användarens rang finns med och som listas på första sidan.

När en användare är inloggad så kan användaren gå in via navbaren ”admin/QandA-resultat” där kan en användare se sin status. Där kan användaren se sin information samt vilken nuvarande rang är.

Användaren kan även se alla sina frågor, svar och kommentarer och kan direkt klicka sig vidare till just den frågan, svaret eller kommentaren. Här kan man o0ckså se hur många gånger användaren har röstat på en fråga, svar eller en kommentar.

**Krav 6**

Tycker att jag har fått till en bra sida som fungerar som tänkt och är väldigt smidig. Har jobbat lite med bootstrap som jag inte har använt så mycket tidigare. Första gången jag använde bootstrap var i oopython och efter det så har jag byggt på det som vi lärt oss i design-kursen så jag tänkte jag ville ge mig på det igen för att lära mig lite mer.

Tycker det är något som jag har gjort extra från min sida eftersom det är relativt nytt för mig så man har fått sätta sig in i det lite mer. Just med att jobba med kolumnerna och responsiviteten för mindre skärmar är något som mest syns på första sidan samt sidan med informationen om en användares status över sitt användade utav QandA.

Jag har även byggt hemsidan med tanke på att lyfta ut hela QandA som en egen modul så man enkelt kan installera funktionaliteten som en egen modul via packagist. Som exempel så har jag tänkt på att ha en separat DI fil och separata router filer så det vore enkelt att skapa en modul på Packagist. Tanken var att scaffolda och köra composer require på min usermodul och på QandA-modul för att få till all funktionalitet. Tiden rann iväg på slutet så jag han inte lägga upp den på packagist. Ville bara lyfta fram hur jag resonerat under projektets gång och vad min tanke var med det hela.

Har försökt få en bra struktur på det hela där var sak är på sin plats.

**Allmänt**

Det har varit ett stort projekt som har tagit mycket tid och energi att genomföra och det är med nöd och näppe som jag levererar i tid. Mycket att jonglera med heltidsjobb, familj och studier. Så om kursen varit för stor så är jag kanske fel man att svara eftersom jag redan har begränsat med tid. Jag har gjort vad jag har kunnat för att leverera i tid. Mitt största bekymmer har varit tiden. Ett sånt här projekt kräver sina kod-timmar och jag känner att med mer timmar i mitt liv så hade jag kunnat rensa upp lite mer i koden och lyfta ut saker så jag hade kunnat göra det mer DRY. Hade velat jobba lite mer med designen och Bootstrap.

Tycker det har varit lagom svårt. Inget som jag känt att jag inte kunnat lösa utan mest att det har tagit tid.

Jag tycker att jag fick till det bra med uppdelningen för att hålla så rena objekt som möjligt även om det känns som det blev många filer så känns det organiserat och allt på sin plats.

Jag tampades lite med tanken att binda enkla objekt till ”ActiveRecordModel” då jag känner att ett objekt inte ska bry sig om var det lagras utan i den objektorienterade världen så borde vi dela upp det enligt SOLID där ”ActiveRekordModel” i min mening bryter mot SRP då den inte bara är ett enkelt objekt utan innehåller också all logik som hör till var det lagras. Så jag delade upp koden och Skapade storage-klasser som utökade ”AktiveRekordModel” och använde det som lagrings klass som utnyttjades utav en service-klass som hanterade objekten och såg till att de lagrades via storage-klassen som tillämpade ett interface så det hela skulle bli lite mer objekt orienterat. Hade inte mer tid att kika på repository och tillämpa det, men spontant så känns det som en bra väg att gå.

**Avslutnigsvis**

Tycker att materialet har varit fullt tillräckligt för att genomföra kursen. Det som saknades dock i material från utbildningen var lite mer ingående om enhetstester. Det fick jag söka mig till lite mer från nätet och kika tillbaka lite på tidigare kurser där vi var inne och nosade lite.

Hade nog också velat se möjligheten att använd ett Repository som alternativ till ActiveRecordModel. Annars har jag varit väldigt nöjd med kursen.

Det jag gillade mest var hur vi jobbade med moduler och fick in ett effektivt sätt att jobba. Det hjälpte mig även i det individuella projektet där jag direkt fick användning utav min modul och kunde snabbt komma igång och sparade då även tid.

Känns som kursen verkligen prickat rätt i hur man jobbar på ett effektivt sätt och även löpande med continious integreation. Nyttigt med verktygen som vi fått för att granska sin kod. Känns som man jobbar på ett bättre sätt och skriver mer kvalitativ kod än innan så det känns som man är på rätt väg.

Kursen får **9/10** utav mig. Riktigt givande kurs som täckte upp mycket.
