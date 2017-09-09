REM Server - a REST Mockup API
===========================================

Detta är en REM - server för att testa vid utveckling. Servern svarar på API anrop och lagrar sin data i sessionen.

Det finns default data att testa här `api/users`.

Man kan lägga till egna dataset så här `api/[datasets]`.



Testa {#try}
-------------------------------------------

Ni kan testa med default data `users`.

* [Hämta alla användare](api/users)
* [Hämta användare med `id=1`](api/users/1)



API {#api}
-------------------------------------------

###Hämta data {#all}

Hämta all data.

```text
GET /api/[dataset]
GET /api/users
```

Resultat.

```json
{
    "data": [],
    "offset": 0,
    "limit": 25,
    "total": 0
}

{
    "data": [
        {
            "id": "1",
            "firstName": "Phuong",
            "lastName": "Allison"
        },
        ...
    ],
    "offset": 0,
    "limit": 25,
    "total": 12
}
```

Alternativa parametrar är:

* `offset` defaults to 0.
* `limit` defaults to 25.

```text
GET /api/users?offset=0&limit=25
```



###Hämta en post {#one}

Hämta en post baserat på id

```text
GET /api/users/7
```

Resultat.

```json
{
    "id": "7",
    "firstName": "Etha",
    "lastName": "Nolley"
}
```



###Skapa en ny post {#create}

Lägg till en ny post till datan. Posten skapas om den inte redan finns och ger den ett id.

```text
POST /api/[dataset]
{"some": "thing"}

POST /api/users
{"firstName": "Mikael", "lastName": "Roos"}
```

Resultat.

```json
{
    "some": "thing",
    "id": 1
}

{
    "firstName": "Mikael",
    "lastName": "Roos",
    "id": 13
}
```



###Uppdatera eller ersätt en post {#upsert}

Uppdatera (insert/update) eller ersätt en post som redan finns.

```text
PUT /api/[dataset]/1
{"id": 1, "other": "thing"}

PUT /api/users/13
{"id": 13, "firstName": "MegaMic", "lastName": "Roos"}
```

Posten med matchande id uppdateras med data från PUT requesten.

Resultat.

```json
{
    "other": "thing",
    "id": 1
}

{
    "id": 13,
    "firstName": "MegaMic",
    "lastName": "Roos"
}
```



###Radera en post {#delete}

Radera en post.

```text
DELETE /api/[dataset]/1

DELETE /api/users/13
```

Resultatet är alltid `null`.


Se original documentationen [här](remserver/remserver)