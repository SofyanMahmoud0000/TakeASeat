# Adminstator


## api/admin/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/admin/login?username=eveniet&password=atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/login"
);

let params = {
    "username": "eveniet",
    "password": "atque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
 "token": "token_value",
 "token_type": "token_type
}
```
<div id="execution-results-POSTapi-admin-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-login"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-login"></code></pre>
</div>
<form id="form-POSTapi-admin-login" data-method="POST" data-path="api/admin/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-login" onclick="tryItOut('POSTapi-admin-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-login" onclick="cancelTryOut('POSTapi-admin-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-admin-login" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-admin-login" data-component="query" required  hidden>
<br>
</p>
</form>


## api/admin/users

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/admin/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/users"
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
    "users": [
        {
            "id": 1,
            "first_name": "Sofyan",
            "last_name": "Mahmoud",
            "username": "sofyanmahmoud0000",
            "email": "sofyan1020@gmail.com",
            "email_verified_at": null,
            "birthday": "21-02-1998",
            "gender": "male",
            "city": "Dokki",
            "address": null,
            "role": "fan",
            "created_at": "2020-12-30T08:58:50.000000Z",
            "updated_at": "2020-12-30T08:58:50.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-admin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-users"></code></pre>
</div>
<div id="execution-error-GETapi-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-users"></code></pre>
</div>
<form id="form-GETapi-admin-users" data-method="GET" data-path="api/admin/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-users" onclick="tryItOut('GETapi-admin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-users" onclick="cancelTryOut('GETapi-admin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/users</code></b>
</p>
<p>
<label id="auth-GETapi-admin-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-users" data-component="header"></label>
</p>
</form>


## api/admin/remove/user/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/admin/remove/user/veniam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/remove/user/veniam"
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
    "message": "The user have been deleted successfully"
}
```
> Example response (201):

```json

{
  "message": "This user doesn\'t exist"   
}
```
<div id="execution-results-GETapi-admin-remove-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-remove-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-remove-user--id-"></code></pre>
</div>
<div id="execution-error-GETapi-admin-remove-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-remove-user--id-"></code></pre>
</div>
<form id="form-GETapi-admin-remove-user--id-" data-method="GET" data-path="api/admin/remove/user/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-remove-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-remove-user--id-" onclick="tryItOut('GETapi-admin-remove-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-remove-user--id-" onclick="cancelTryOut('GETapi-admin-remove-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-remove-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/remove/user/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-admin-remove-user--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-remove-user--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-admin-remove-user--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/admin/verify/user/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/admin/verify/user/nobis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/verify/user/nobis"
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
    "message": "The user have been verified successfully"
}
```
> Example response (201):

```json
{
    "message": "This user doesn't exist"
}
```
> Example response (201):

```json
{
    "message": "This user is already verified"
}
```
<div id="execution-results-GETapi-admin-verify-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-verify-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-verify-user--id-"></code></pre>
</div>
<div id="execution-error-GETapi-admin-verify-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-verify-user--id-"></code></pre>
</div>
<form id="form-GETapi-admin-verify-user--id-" data-method="GET" data-path="api/admin/verify/user/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-verify-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-verify-user--id-" onclick="tryItOut('GETapi-admin-verify-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-verify-user--id-" onclick="cancelTryOut('GETapi-admin-verify-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-verify-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/verify/user/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-admin-verify-user--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-admin-verify-user--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-admin-verify-user--id-" data-component="url" required  hidden>
<br>
</p>
</form>



