# Manager


## api/manager/stadiums

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/manager/stadiums" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/manager/stadiums"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "stadiums": [
        {
            "id": 1,
            "name": "Blick and Sons",
            "rows": "9",
            "seats_per_row": "5",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 2,
            "name": "Klocko LLC",
            "rows": "7",
            "seats_per_row": "9",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 3,
            "name": "Tremblay-Koelpin",
            "rows": "6",
            "seats_per_row": "10",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 4,
            "name": "Feil-Streich",
            "rows": "10",
            "seats_per_row": "10",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 5,
            "name": "Ullrich-Pfannerstill",
            "rows": "7",
            "seats_per_row": "6",
            "created_at": "2020-12-31T03:00:36.000000Z",
            "updated_at": "2020-12-31T03:00:36.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-manager-stadiums" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-manager-stadiums"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager-stadiums"></code></pre>
</div>
<div id="execution-error-GETapi-manager-stadiums" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager-stadiums"></code></pre>
</div>
<form id="form-GETapi-manager-stadiums" data-method="GET" data-path="api/manager/stadiums" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-manager-stadiums', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-manager-stadiums" onclick="tryItOut('GETapi-manager-stadiums');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-manager-stadiums" onclick="cancelTryOut('GETapi-manager-stadiums');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-manager-stadiums" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/manager/stadiums</code></b>
</p>
<p>
<label id="auth-GETapi-manager-stadiums" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-manager-stadiums" data-component="header"></label>
</p>
</form>


## api/manager/teams

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/manager/teams" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/manager/teams"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "teams": [
        {
            "id": 1,
            "name": "Barton, Streich and Mayer",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 2,
            "name": "Cormier, Reynolds and Langosh",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 3,
            "name": "Hermann-Sauer",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 4,
            "name": "Thompson-Rutherford",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 5,
            "name": "Schulist-Keebler",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 6,
            "name": "Hudson-Towne",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 7,
            "name": "Wiza, Rice and Lehner",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 8,
            "name": "Cole-Bechtelar",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 9,
            "name": "Kohler PLC",
            "created_at": "2020-12-31T03:00:34.000000Z",
            "updated_at": "2020-12-31T03:00:34.000000Z"
        },
        {
            "id": 10,
            "name": "Kerluke, Thiel and Bergnaum",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 11,
            "name": "Barton, Langworth and Skiles",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 12,
            "name": "Kohler-Schaefer",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 13,
            "name": "Wolff, Luettgen and Lueilwitz",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 14,
            "name": "Nikolaus, Runte and Smitham",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 15,
            "name": "Parker, Walker and Pfannerstill",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 16,
            "name": "Senger, Yost and O'Kon",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 17,
            "name": "Donnelly, Leffler and Casper",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        },
        {
            "id": 18,
            "name": "Kiehn-Grady",
            "created_at": "2020-12-31T03:00:35.000000Z",
            "updated_at": "2020-12-31T03:00:35.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-manager-teams" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-manager-teams"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager-teams"></code></pre>
</div>
<div id="execution-error-GETapi-manager-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager-teams"></code></pre>
</div>
<form id="form-GETapi-manager-teams" data-method="GET" data-path="api/manager/teams" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-manager-teams', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-manager-teams" onclick="tryItOut('GETapi-manager-teams');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-manager-teams" onclick="cancelTryOut('GETapi-manager-teams');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-manager-teams" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/manager/teams</code></b>
</p>
<p>
<label id="auth-GETapi-manager-teams" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-manager-teams" data-component="header"></label>
</p>
</form>


## api/manager/add/match

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/manager/add/match?home_team_id=7&away_team_id=5&stadium_id=16&date_time=et&main_referee=iusto&linesmen_1=et&linesmen_2=rem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/manager/add/match"
);

let params = {
    "home_team_id": "7",
    "away_team_id": "5",
    "stadium_id": "16",
    "date_time": "et",
    "main_referee": "iusto",
    "linesmen_1": "et",
    "linesmen_2": "rem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "The match has been added successfully"
}
```
> Example response (201):

```json
{
    "error": "The home team can't be equal the away team"
}
```
> Example response (201):

```json
{
    "errors": {
        "home_team_id": [
            "The home team id field is required."
        ],
        "away_team_id": [
            "The away team id field is required."
        ],
        "stadium_id": [
            "The stadium id field is required."
        ],
        "date_time": [
            "The date time field is required."
        ],
        "main_referee": [
            "The main referee field is required."
        ],
        "linesmen_1": [
            "The linesmen 1 field is required."
        ],
        "linesmen_2": [
            "The linesmen 2 field is required."
        ]
    }
}
```
<div id="execution-results-POSTapi-manager-add-match" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-add-match"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-add-match"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-add-match" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-add-match"></code></pre>
</div>
<form id="form-POSTapi-manager-add-match" data-method="POST" data-path="api/manager/add/match" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-add-match', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-add-match" onclick="tryItOut('POSTapi-manager-add-match');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-add-match" onclick="cancelTryOut('POSTapi-manager-add-match');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-add-match" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/add/match</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-add-match" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-add-match" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>home_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="home_team_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>away_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="away_team_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>date_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_time" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
date</p>
<p>
<b><code>main_referee</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="main_referee" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the main referee</p>
<p>
<b><code>linesmen_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_1" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the first linesmen</p>
<p>
<b><code>linesmen_2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_2" data-endpoint="POSTapi-manager-add-match" data-component="query" required  hidden>
<br>
The name of the second linesmen</p>
</form>


## api/manager/update/match/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/manager/update/match/corporis?home_team_id=15&away_team_id=5&stadium_id=19&date_time=sit&main_referee=nobis&linesmen_1=doloribus&linesmen_2=voluptas" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/manager/update/match/corporis"
);

let params = {
    "home_team_id": "15",
    "away_team_id": "5",
    "stadium_id": "19",
    "date_time": "sit",
    "main_referee": "nobis",
    "linesmen_1": "doloribus",
    "linesmen_2": "voluptas",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "The match has been updated successfully"
}
```
> Example response (201):

```json
{
    "error": "The home team can't be equal the away team"
}
```
> Example response (201):

```json
{
    "error": "This match doesn't exist"
}
```
> Example response (201):

```json
{
    "errors": {
        "home_team_id": [
            "The home team id field is required."
        ],
        "away_team_id": [
            "The away team id field is required."
        ],
        "stadium_id": [
            "The stadium id field is required."
        ],
        "date_time": [
            "The date time field is required."
        ],
        "main_referee": [
            "The main referee field is required."
        ],
        "linesmen_1": [
            "The linesmen 1 field is required."
        ],
        "linesmen_2": [
            "The linesmen 2 field is required."
        ]
    }
}
```
<div id="execution-results-POSTapi-manager-update-match--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-update-match--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-update-match--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-update-match--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-update-match--id-"></code></pre>
</div>
<form id="form-POSTapi-manager-update-match--id-" data-method="POST" data-path="api/manager/update/match/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-update-match--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-update-match--id-" onclick="tryItOut('POSTapi-manager-update-match--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-update-match--id-" onclick="cancelTryOut('POSTapi-manager-update-match--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-update-match--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/update/match/{id}</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-update-match--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-update-match--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-manager-update-match--id-" data-component="url" required  hidden>
<br>
The id of the match to be updated</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>home_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="home_team_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>away_team_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="away_team_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>date_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="date_time" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
date</p>
<p>
<b><code>main_referee</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="main_referee" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the main referee</p>
<p>
<b><code>linesmen_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_1" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the first linesmen</p>
<p>
<b><code>linesmen_2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="linesmen_2" data-endpoint="POSTapi-manager-update-match--id-" data-component="query" required  hidden>
<br>
The name of the second linesmen</p>
</form>


## api/manager/add/stadium

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/manager/add/stadium?name=alias&rows=18&seats_per_row=5" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/manager/add/stadium"
);

let params = {
    "name": "alias",
    "rows": "18",
    "seats_per_row": "5",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "The stadium has been added successfully"
}
```
<div id="execution-results-POSTapi-manager-add-stadium" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-manager-add-stadium"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-add-stadium"></code></pre>
</div>
<div id="execution-error-POSTapi-manager-add-stadium" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-add-stadium"></code></pre>
</div>
<form id="form-POSTapi-manager-add-stadium" data-method="POST" data-path="api/manager/add/stadium" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-add-stadium', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-manager-add-stadium" onclick="tryItOut('POSTapi-manager-add-stadium');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-manager-add-stadium" onclick="cancelTryOut('POSTapi-manager-add-stadium');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-manager-add-stadium" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/manager/add/stadium</code></b>
</p>
<p>
<label id="auth-POSTapi-manager-add-stadium" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-manager-add-stadium" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The name of the stadium</p>
<p>
<b><code>rows</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rows" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The number of rows in the stadium</p>
<p>
<b><code>seats_per_row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="seats_per_row" data-endpoint="POSTapi-manager-add-stadium" data-component="query" required  hidden>
<br>
The number of seats in each row</p>
</form>



