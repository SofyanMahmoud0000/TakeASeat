# Fan


## api/fan/informations

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/fan/informations" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/fan/informations"
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
    "user": {
        "id": 11,
        "first_name": "new name",
        "last_name": "new nam",
        "username": "sofyanmahmoud0000",
        "email": "sofyan1020@gmail.com",
        "email_verified_at": null,
        "birthday": "12-12-2000",
        "gender": "male",
        "city": "Zamalek",
        "address": null,
        "role": "fan",
        "created_at": "2020-12-31T04:07:12.000000Z",
        "updated_at": "2020-12-31T04:12:47.000000Z"
    }
}
```
<div id="execution-results-GETapi-fan-informations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-informations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-informations"></code></pre>
</div>
<div id="execution-error-GETapi-fan-informations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-informations"></code></pre>
</div>
<form id="form-GETapi-fan-informations" data-method="GET" data-path="api/fan/informations" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-informations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-informations" onclick="tryItOut('GETapi-fan-informations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-informations" onclick="cancelTryOut('GETapi-fan-informations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-informations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/informations</code></b>
</p>
<p>
<label id="auth-GETapi-fan-informations" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-informations" data-component="header"></label>
</p>
</form>


## api/fan/update

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/fan/update?first_name=assumenda&last_name=consectetur&birthday=ad&gender=necessitatibus&city=dolorem&address=rerum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/fan/update"
);

let params = {
    "first_name": "assumenda",
    "last_name": "consectetur",
    "birthday": "ad",
    "gender": "necessitatibus",
    "city": "dolorem",
    "address": "rerum",
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
    "message": "The date have been updated successfully"
}
```
> Example response (201):

```json
{
    "errors": {
        "first_name": [
            "The first name field is required."
        ],
        "last_name": [
            "The last name field is required."
        ],
        "birthday": [
            "The birthday field is required."
        ],
        "gender": [
            "The gender field is required."
        ],
        "city": [
            "The city field is required."
        ]
    }
}
```
<div id="execution-results-POSTapi-fan-update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-fan-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-fan-update"></code></pre>
</div>
<div id="execution-error-POSTapi-fan-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-fan-update"></code></pre>
</div>
<form id="form-POSTapi-fan-update" data-method="POST" data-path="api/fan/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-fan-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-fan-update" onclick="tryItOut('POSTapi-fan-update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-fan-update" onclick="cancelTryOut('POSTapi-fan-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-fan-update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/fan/update</code></b>
</p>
<p>
<label id="auth-POSTapi-fan-update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-fan-update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-fan-update" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-fan-update" data-component="query"  hidden>
<br>
optional</p>
</form>


## api/fan/reserve

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/fan/reserve?stadium_id=10&match_id=3&row=11&col=17" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/fan/reserve"
);

let params = {
    "stadium_id": "10",
    "match_id": "3",
    "row": "11",
    "col": "17",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "message": "The seat has reserved successfully"
}
```
> Example response (201):

```json
{
    "error": "This seat is not valid"
}
```
> Example response (201):

```json
{
    "error": "This stadium doesn't exist"
}
```
> Example response (201):

```json
{
    "error": "This match dosen't exist in this stadium"
}
```
> Example response (201):

```json
{
    "error": "This seat is already reserved"
}
```
> Example response (201):

```json
{
    "error": "You have already reserved this seat"
}
```
> Example response (201):

```json
{
    "errors": {
        "stadium_id": [
            "The stadium id field is required."
        ],
        "match_id": [
            "The match id field is required."
        ],
        "row": [
            "The row field is required."
        ],
        "col": [
            "The col field is required."
        ]
    }
}
```
<div id="execution-results-GETapi-fan-reserve" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-reserve"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-reserve"></code></pre>
</div>
<div id="execution-error-GETapi-fan-reserve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-reserve"></code></pre>
</div>
<form id="form-GETapi-fan-reserve" data-method="GET" data-path="api/fan/reserve" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-reserve', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-reserve" onclick="tryItOut('GETapi-fan-reserve');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-reserve" onclick="cancelTryOut('GETapi-fan-reserve');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-reserve" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/reserve</code></b>
</p>
<p>
<label id="auth-GETapi-fan-reserve" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-reserve" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>match_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="match_id" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>col</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="col" data-endpoint="GETapi-fan-reserve" data-component="query" required  hidden>
<br>
</p>
</form>


## api/fan/cancel/reservation

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/fan/cancel/reservation?stadium_id=5&match_id=5&row=8&col=11" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/fan/cancel/reservation"
);

let params = {
    "stadium_id": "5",
    "match_id": "5",
    "row": "8",
    "col": "11",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "message": "The seat has reserved successfully"
}
```
> Example response (201):

```json
{
    "error": "This seat is not valid"
}
```
> Example response (201):

```json
{
    "error": "This stadium doesn't exist"
}
```
> Example response (201):

```json
{
    "error": "This match dosen't exist in this stadium"
}
```
> Example response (201):

```json
{
    "error": "This seat is not reserved by you"
}
```
> Example response (201):

```json
{
    "errors": {
        "stadium_id": [
            "The stadium id field is required."
        ],
        "match_id": [
            "The match id field is required."
        ],
        "row": [
            "The row field is required."
        ],
        "col": [
            "The col field is required."
        ]
    }
}
```
<div id="execution-results-GETapi-fan-cancel-reservation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-fan-cancel-reservation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-fan-cancel-reservation"></code></pre>
</div>
<div id="execution-error-GETapi-fan-cancel-reservation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-fan-cancel-reservation"></code></pre>
</div>
<form id="form-GETapi-fan-cancel-reservation" data-method="GET" data-path="api/fan/cancel/reservation" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-fan-cancel-reservation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-fan-cancel-reservation" onclick="tryItOut('GETapi-fan-cancel-reservation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-fan-cancel-reservation" onclick="cancelTryOut('GETapi-fan-cancel-reservation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-fan-cancel-reservation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/fan/cancel/reservation</code></b>
</p>
<p>
<label id="auth-GETapi-fan-cancel-reservation" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-fan-cancel-reservation" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>stadium_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stadium_id" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>match_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="match_id" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="row" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>col</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="col" data-endpoint="GETapi-fan-cancel-reservation" data-component="query" required  hidden>
<br>
</p>
</form>



