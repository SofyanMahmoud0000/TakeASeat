# Shared


## api/matches

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/matches" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/matches"
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
   "matches": [
       {
           "id": 1,
           "home_team_id": "7",
           "away_team_id": "12",
           "stadium_id": "3",
           "date_time": "2020-04-19",
           "main_referee": "River Cole PhD",
           "linesmen_1": "Rachel Dickinson",
           "linesmen_2": "Ashleigh Fritsch",
           "created_at": "2020-12-31T03:00:36.000000Z",
           "updated_at": "2020-12-31T03:00:36.000000Z",
           "stadium": {
               "id": 3,
               "name": "Tremblay-Koelpin",
               "rows": "2",
               "seats_per_row": "4",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "away_team": {
               "id": 12,
               "name": "Kohler-Schaefer",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "home_team": {
               "id": 7,
               "name": "Wiza, Rice and Lehner",
               "created_at": "2020-12-31T03:00:34.000000Z",
               "updated_at": "2020-12-31T03:00:34.000000Z"
           },
           "seats": [
               [
                   1,
                   1,
                   1,
                   1,
               ],
               [
                   1,
                   1,
                   0,
                   1,
               ]
           ]
       },
       {
           "id": 2,
           "home_team_id": "11",
           "away_team_id": "11",
           "stadium_id": "4",
           "date_time": "1983-03-16",
           "main_referee": "Jocelyn Hackett",
           "linesmen_1": "Clyde Reynolds",
           "linesmen_2": "Karina Gaylord",
           "created_at": "2020-12-31T03:00:36.000000Z",
           "updated_at": "2020-12-31T03:00:36.000000Z",
           "stadium": {
               "id": 4,
               "name": "Feil-Streich",
               "rows": "2",
               "seats_per_row": "3",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "away_team": {
               "id": 11,
               "name": "Barton, Langworth and Skiles",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "home_team": {
               "id": 11,
               "name": "Barton, Langworth and Skiles",
               "created_at": "2020-12-31T03:00:35.000000Z",
               "updated_at": "2020-12-31T03:00:35.000000Z"
           },
           "seats": [
               [
                   1,
                   1,
                   1,
               ],
               [
                   1,
                   1,
                   1,
               ]
           ]
       },
   ]
}
```
<div id="execution-results-GETapi-matches" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-matches"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-matches"></code></pre>
</div>
<div id="execution-error-GETapi-matches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-matches"></code></pre>
</div>
<form id="form-GETapi-matches" data-method="GET" data-path="api/matches" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-matches', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-matches" onclick="tryItOut('GETapi-matches');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-matches" onclick="cancelTryOut('GETapi-matches');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-matches" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/matches</code></b>
</p>
<p>
<label id="auth-GETapi-matches" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-matches" data-component="header"></label>
</p>
</form>


## api/match/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/match/4" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/match/4"
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


> Example response (201):

```json
{
    "error": "This match doesn't exist"
}
```
> Example response (200):

```json

{
   "match": {
       "id": 1,
       "home_team_id": "7",
       "away_team_id": "12",
       "stadium_id": "3",
       "date_time": "2020-04-19",
       "main_referee": "River Cole PhD",
       "linesmen_1": "Rachel Dickinson",
       "linesmen_2": "Ashleigh Fritsch",
       "created_at": "2020-12-31T03:00:36.000000Z",
       "updated_at": "2020-12-31T03:00:36.000000Z",
       "stadium": {
           "id": 3,
           "name": "Tremblay-Koelpin",
           "rows": "2",
           "seats_per_row": "4",
           "created_at": "2020-12-31T03:00:35.000000Z",
           "updated_at": "2020-12-31T03:00:35.000000Z"
       },
       "away_team": {
           "id": 12,
           "name": "Kohler-Schaefer",
           "created_at": "2020-12-31T03:00:35.000000Z",
           "updated_at": "2020-12-31T03:00:35.000000Z"
       },
       "home_team": {
           "id": 7,
           "name": "Wiza, Rice and Lehner",
           "created_at": "2020-12-31T03:00:34.000000Z",
           "updated_at": "2020-12-31T03:00:34.000000Z"
       },
       "seats": [
           [
               1,
               1,
               1,
               1,
           ],
           [
               1,
               1,
               0,
               1,
           ]
       ]
   }
}
```
<div id="execution-results-GETapi-match--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-match--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-match--id-"></code></pre>
</div>
<div id="execution-error-GETapi-match--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-match--id-"></code></pre>
</div>
<form id="form-GETapi-match--id-" data-method="GET" data-path="api/match/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-match--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-match--id-" onclick="tryItOut('GETapi-match--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-match--id-" onclick="cancelTryOut('GETapi-match--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-match--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/match/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-match--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-match--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-match--id-" data-component="url" required  hidden>
<br>
The id of the match to be viewed</p>
</form>



